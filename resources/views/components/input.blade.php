@props(['name','label','type','placeholder','value'])

@php
$type = $type ?? 'text';
$name = $name ?? Str::slug($label);
$placeholder = $placeholder ?? $label;
$value = $value ?? '';
@endphp

<div {{$attributes->merge(['class' => 'form-group'])}}>
    <label for="{{$name}}">{{$label}}</label>
    <input class="form-control @error($name) is-invalid @elseif(old($name)) is-valid @enderror" id="{{$name}}" type="{{$type}}" name="{{$name}}" placeholder="{{$placeholder}}" value="{{$value}}" {!!$attributes->merge()!!}>
    <div class="invalid-feedback">
        @error($name) {{ $message }} @else Campo Obrigatório! @enderror
    </div>
</div>