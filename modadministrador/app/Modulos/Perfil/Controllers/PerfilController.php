<?php

namespace App\Modulos\perfil\Controllers;

use App\Http\Controllers\Controller;
use App\Modulos\Usuario\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Modulos\Configuracion\Configuracion;
use App\Modulos\Perfil\PerfilInterface;


class PerfilController extends Controller
{
    protected $perfilRepository;

    public function __construct(PerfilInterface $perfilUser)
    {
        $this->perfilRepository = $perfilUser;
    }

    public function index()
    {
        $ciudades =Configuracion::obtenerParametro(Configuracion::CIUDAD);

        return view('material.sections.perfil.perfil', compact('ciudades'));
    }

    public function updateperfil(Request $request)
    {
        if ($this->perfilRepository->actualizar($request->all(),1))
        {
            return redirect(route('perfil.index'))
                ->with('title', '¡Bien hecho!')
                ->with('message', 'Datos actualizados con exito.')
                ->with('type', 'success');
        } else {
            return redirect(route('perfil.index'))
                ->with('title', '¡Lo sentimos!')
                ->with('message', 'Los datos no se pudieron actualizar.')
                ->with('type', 'error');
        }
       
    }

    public function updatePassword(Request $request)
    {

        if ($this->perfilRepository->updatePassword($request->all()))
        {
            return redirect(route('perfil.index'))
                ->with('title', '¡Bien hecho!')
                ->with('message', 'Datos de acceso actualizados con exito.')
                ->with('type', 'success');
        } else {
            return redirect(route('perfil.index'))
                ->with('title', '¡Lo sentimos!')
                ->with('message', 'Los datos de acceso no se pudieron actualizar.')
                ->with('type', 'error');
        }
    }


    public function updatePerfilPicture(Request $request)
    {
        $this->validate($request, [
            'file' => 'required|image',
        ]);


        $path =$request->file('file')->store('avatar','perfil');
    
        $url = Storage::disk('perfil')->url('app/public/assets/perfil/'. $path);

        return response($url, 200);
    }

    public function storePerfilPic(Request $request)
    {
        $targ_w = $targ_h = 400;
        $jpeg_quality = 90;
        $src = $request->url;

        $array = explode('.', $src);
        $extension = end($array);

        $src = str_replace('https://', 'http://', $src);
        
        $image_info = getimagesize($src);
        $image_type = $image_info[2];
        if( $image_type == IMAGETYPE_JPEG ) {
            $img_r = imagecreatefromjpeg($src);
        } elseif( $image_type == IMAGETYPE_GIF ) {

            $img_r = imagecreatefromgif($src);
        } elseif( $image_type == IMAGETYPE_PNG ) {

            $img_r = imagecreatefrompng($src);
        }

        $x = $request->x;
        $y = $request->y;
        $w = $request->w;
        $h = $request->h;

        $dst_r = ImageCreateTrueColor( $targ_w, $targ_h );

        imagecopyresampled($dst_r,$img_r,0,0,intval($x),intval($y), $targ_w,$targ_h, intval($w),intval($h));

        Storage::delete(asset($src));

        $filename = storage_path('app').'/avatar/'.md5_file($src).'.'.$extension;
        
        if( $image_type == IMAGETYPE_JPEG ) {

            imagejpeg($dst_r,$filename, $jpeg_quality);

        } elseif( $image_type == IMAGETYPE_GIF ) {

            imagegif($dst_r,$filename);

        } elseif( $image_type == IMAGETYPE_PNG ) {

            imagepng($dst_r,$filename);
        }

        $url = '../storage/app/avatar/'.md5_file($src).'.'.$extension;
        $user = User::find(auth()->user()->id);
        $user->vc_perfil_pic = $url;
        $user->save();

        return redirect()->route('perfil.index')->with('title', '¡Bien Hecho!')
            ->with('message', 'Datos actualizados correctamente.')
            ->with('type', 'success');
    }
}