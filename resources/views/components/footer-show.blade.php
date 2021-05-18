@props(['route','name1'])

@php
  $name1 = $name1 ?? 'Previous';
@endphp

<div class="card-footer" {!!$attributes->merge()!!}>
  <a href="{{route($route)}}" type="button" class="btn btn-secondary">{{$name1}}</a>
</div>