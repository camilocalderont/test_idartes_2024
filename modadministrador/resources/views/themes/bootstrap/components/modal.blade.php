<div id="{{ $id }}" class="modal fade" tabindex="-1" data-width="760" data-backdrop="static" data-keyboard="false">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
        <h4 class="modal-title">{{ $title }}</h4>
    </div>
    <div class="modal-body">
        <div class="row">
            {{ $body }}
        </div>
    </div>
    <div class="modal-footer">
        {{ $footer }}
    </div>
</div>