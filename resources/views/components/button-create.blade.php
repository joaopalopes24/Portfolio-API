@props(['permission','route'])

@can($permission)
<div class="card-header">
    <a href="{{route($route)}}" class="btn btn-outline-success"><i class="fas fa-plus"></i> Cadastrar</a>
</div>
@endcan