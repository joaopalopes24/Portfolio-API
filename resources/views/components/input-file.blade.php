@props(['name','label','feedback'=>NULL])

@php
$type = $type ?? 'text';
$name = $name ?? Str::slug($label);
$placeholder = $placeholder ?? $label;
$value = $value ?? '';
@endphp

<div {{$attributes->merge(['class' => 'form-group'])}}>
  <label for="{{$name}}">{{$label}}</label>
  <input class="form-control-file" id="{{$name}}" type="file" name="{{$name}}" {!!$attributes->merge()!!}>
  @isset($feedback)
  <div class="invalid-feedback">
    Campo Obrigatório!
  </div>
  <div class="valid-feedback">
    OK!
  </div>
  @endisset
</div>