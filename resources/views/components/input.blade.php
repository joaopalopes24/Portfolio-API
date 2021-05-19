@props(['name','label','type','placeholder','value','feedback'=>NULL])

@php
  $type = $type ?? 'text';
  $name = $name ?? Str::slug($label);
  $placeholder = $placeholder ?? $label;
  $value = $value ?? '';
@endphp

<div {{$attributes->merge(['class' => 'form-group'])}}>
  <label for="{{$name}}">{{$label}}</label>
  <input class="form-control" id="{{$name}}" type="{{$type}}" name="{{$name}}" placeholder="{{$placeholder}}" value="{{$value}}" {!!$attributes->merge()!!}>
  @isset($feedback)
    <div class="invalid-feedback">
      Campo Obrigatório!
    </div>
    <div class="valid-feedback">
     OK!
    </div>
  @endisset
</div>