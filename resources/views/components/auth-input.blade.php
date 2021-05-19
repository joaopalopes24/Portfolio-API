@props(['icon','name','type','placeholder','value','feedback'=>NULL])

@php
  $type = $type ?? 'text';
  $name = $name ?? Str::slug($placeholder);
  $value = $value ?? '';
@endphp

<div class="input-group mb-3">
  <div class="input-group-append">
    <div class="input-group-text">
      <span class="{{$icon}}"></span>
    </div>
  </div>
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