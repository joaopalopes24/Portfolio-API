@props(['permission','route','parameter1','parameter2'])

@php
$parameter2 = $parameter2 ?? NULL;
@endphp

@can($permission)
<a href="{{$parameter2 ? route($route,[$parameter1,$parameter2]) : route($route,$parameter1)}}" type="button" class="btn btn-primary">
    <i class="fas fa-pencil-alt"></i>
</a>
@endcan