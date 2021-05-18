@props(['route','parameter1','parameter2'])

@php
  $parameter2 = $parameter2 ?? NULL;
@endphp

<a href="{{$parameter2 ? route($route,[$parameter1,$parameter2]) : route($route,$parameter1)}}" type="button" class="btn btn-default">
  <i class="far fa-eye"></i>
</a>