@props(['icon','name','type','placeholder','value'])

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
    <input class="form-control @error($name) is-invalid @elseif(old($name)) is-valid @enderror" id="{{$name}}" type="{{$type}}" name="{{$name}}" placeholder="{{$placeholder}}" value="{{$value}}" {!!$attributes->merge()!!}>
    <div class="invalid-feedback">
        @error($name) {{ $message }} @else Campo Obrigatório! @enderror
    </div>
</div>