@props(['parameter'])

@php
if($parameter)
    $parameter->photo ? $url = "storage/$parameter->photo" : $url = "plugins/images/userX.png";
else
    $url = "plugins/images/userX.png";
@endphp

<div class="card-header">
    <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#modalPhoto"><i class="fas fa-plus"></i> Foto</button>
</div>
<div class="modal fade" id="modalPhoto" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabel">Escolher Foto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img id="previewImg" src="{{asset($url)}}" class="bd-placeholder-img card-img-top mb-3" alt="Foto de Perfil do Usuário">
                <x-input-file name="photo" label="Foto de Perfil (tamanho máximo 4MB)" onchange="previewFile(this);" />
                <div class="form-group">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="not_photo" name="not_photo" onclick="notPhoto()">
                        <label for="not_photo" class="custom-control-label">Sem Foto</label>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>
