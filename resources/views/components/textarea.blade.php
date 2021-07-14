@props(['name','label','value'])

@php
$name = $name ?? Str::slug($label);
$value = $value ?? '';
@endphp

<div {{$attributes->merge(['class' => 'form-group'])}}>
  <label for="{{$name}}">{{$label}}</label>
  <textarea class="form-control" id="autosize" rows="1" {!!$attributes->merge()!!}>{{$value}}</textarea>
</div>