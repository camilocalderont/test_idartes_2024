var handleResponsive = function() {
    if ($(window).width() <= 1024 && $(window).width() >= 678) {
        $('.responsive-1024').each(function(){
            $(this).attr("data-class", $(this).attr("class"));
            $(this).attr("class", 'responsive-1024 col-md-12');
        });
    } else {
        $('.responsive-1024').each(function(){
            if ($(this).attr("data-class")) {
                $(this).attr("class", $(this).attr("data-class"));
                $(this).removeAttr("data-class");
            }
        });
    }
};

function updateCoords(c)
{
    $('#crop_x').val(c.x);
    $('#crop_y').val(c.y);
    $('#crop_w').val(c.w);
    $('#crop_h').val(c.h);
};

var dropZone = function () {
    var upload = function (route) {
        Dropzone.autoDiscover = false;
        $("#dropzone").dropzone({
            url: route,
            addRemoveLinks: true,
            parallelUploads: 1,
            maxFiles: 1,
            autoProcessQueue: false,
            dictRemoveFile: "Remover",
            maxFileSize: 1000,
            dictResponseError: "Ha ocurrido un error en el server",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            acceptedFiles: ".jpg, .png, .jpeg",
            init: function() {
                var submitButton = document.querySelector("#submit");
                var myDropzone = this; // closure
                myDropzone.on("maxfilesexceeded", function(file) {
                    this.removeFile(file);
                });
                submitButton.addEventListener("click", function(file) {
                    myDropzone.processQueue();
                });
                myDropzone.on("sending", function(file) {
                    $.blockUI({
                        message: '<i class="fa fa-refresh fa-spin fa-3x fa-fw"></i><h3> Procesando Imágen </h3>',
                        css: {
                            border: 'none',
                            padding: '20px',
                            backgroundColor: '#000',
                            '-webkit-border-radius': '10px',
                            '-moz-border-radius': '10px',
                            opacity: .5,
                            color: '#fff'
                        },
                    });
                });
                myDropzone.on("complete", function(file) {
                    myDropzone.removeFile(file);
                });
            },

            complete: function(file) {
                $.unblockUI({
                    onUnblock: function () {
                        console.log(file);
                        if (file.status == "success") {
                            swal({
                                title: "Carga Satisfactoria",
                                text: 'El archivo '+file.name+' se ha procesado satisfactoriamente.',
                                buttonsStyling: false,
                                confirmButtonClass: "btn btn-success",
                                type: "success",
                            }, function () {
                                console.log(file.xhr.response);
                                var url = file.xhr.response;
                                $('#demo8').attr('src', url);
                                $('#profile-url').val(url);
                                App.addResizeHandler(handleResponsive);
                                handleResponsive();
                                $('#demo8').Jcrop({
                                    aspectRatio: 1,
                                    boxWidth: 600,
                                    boxHeight: 400,
                                    setSelect:  [ 0, 0, 200, 200 ],
                                    onSelect: updateCoords
                                });
                                $('#image-crop-modal').modal('show');
                            });
                        }
                    }
                });
            },

            error: function(file) {
                swal({
                    title: "¡Ocurrió un Error!",
                    text: 'El archivo '+file.name+' no se pudo cargar. Intenta nuevamente.',
                    buttonsStyling: false,
                    confirmButtonClass: "btn btn-danger",
                    type: "error",
                });
            },
        });
    };

    return {
        init: function (route) {
            upload(route);
        }
    }
}();

