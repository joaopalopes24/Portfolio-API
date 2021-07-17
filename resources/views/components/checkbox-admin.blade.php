@props(['id','name','value','label','parameter'])

@php
$name = $name ?? $id;
$value = $value ?? '';
$parameter = $parameter ?? '';
@endphp

<div class="col-md-4 form-group">
    <div class="custom-control custom-checkbox">
        <input class="custom-control-input @error('roles') is-invalid @elseif(old('roles')) is-valid @enderror" type="checkbox" id="{{$id}}" name="{{$name}}" value="{{$value}}" {{ $parameter === '1' ? 'checked' : ''}} {!!$attributes->merge()!!}>
        <label for="{{$id}}" class="custom-control-label">{{$label}}</label>
    </div>
</div>