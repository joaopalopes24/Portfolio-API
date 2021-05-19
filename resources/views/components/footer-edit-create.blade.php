@props(['route','name1','name2'])

@php
  $name1 = $name1 ?? 'Anterior';
  $name2 = $name2 ?? 'Salvar';
@endphp

<div class="card-footer" {!!$attributes->merge()!!}>
  <a href="{{route($route)}}" type="button" class="btn btn-secondary">{{$name1}}</a>
  <button type="submit" class="btn btn-success">{{$name2}}</button>
</div>