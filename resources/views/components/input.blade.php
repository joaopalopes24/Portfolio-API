@props(['name','label','type','placeholder','value','feedback'=>NULL])

@php
  $type = $type ?? 'text';
  $name = $name ?? Str::slug($label);
  $placeholder = $placeholder ?? $label;
  $value = $value ?? '';
@endphp

<div {{$attributes->merge(['class' => ''])}}>
  <label for="{{$name}}">{{$label}}</label>
  <input class="form-control" id="{{$name}}" type="{{$type}}" name="{{$name}}" placeholder="{{$placeholder}}" value="{{$value}}" {!!$attributes->merge()!!}>
  @isset($feedback)
    <div class="invalid-feedback">
      Required field!
    </div>
    <div class="valid-feedback">
      Looks good!
    </div>
  @endisset
</div>