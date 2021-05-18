@props(['route','name1','name2'])

@php
  $route = $route ?? NULL;
  $name1 = $name1 ?? 'Name 01';
  $name2 = $name2 ?? 'Name 02';
@endphp

<div class="row">
  <button type="submit" class="btn btn-primary btn-block">{{$name1}}</button>
  @isset($route)
    <a href="{{ route($route) }}" type="button" class="btn btn-light btn-block">{{$name2}}</a>
  @endisset
</div>