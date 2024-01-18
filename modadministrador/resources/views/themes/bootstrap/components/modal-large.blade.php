<div id="{{ $id }}" class="modal container fade {{ $class }}" tabindex="-1" aria-hidden="false" >
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
        <h4 class="modal-title">
            <i class="{{ $icon }}"></i>
            <span class="caption-subject bold uppercase">{{ $title }}</span>
        </h4>
    </div> 
    <div class="modal-body">
        {{ $body }}
      
    </div>
    <div class="modal-footer">
        {{ $footer }}
    </div>
</div> 