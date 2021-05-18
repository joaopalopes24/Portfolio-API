@props(['route','name1','name2'])

@php
  $name1 = $name1 ?? 'Previous';
  $name2 = $name2 ?? 'Save';
@endphp

<div class="card-footer" {!!$attributes->merge()!!}>
  <a href="{{route($route)}}" type="button" class="btn btn-secondary">{{$name1}}</a>
  <button type="submit" class="btn btn-success">{{$name2}}</button>
</div>