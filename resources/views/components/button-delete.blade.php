@props(['permission','id'])

@can($permission)
<a href="#" type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-default{{$id}}">
  <i class="fas fa-trash-alt"></i>
</a>
@endcan