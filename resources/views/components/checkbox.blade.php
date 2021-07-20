@props(['class','name','value','label','onclick'])

@php
$name = $name ?? Str::slug($label);
$onclick = $onclick ?? '';
@endphp

<div class="col-12 form-group">
    <div {{$attributes->merge(['class' => 'custom-control '.$class])}}>
        <input type="checkbox" class="custom-control-input @error('password') is-invalid @elseif(old('password')) is-valid @enderror" id="{{$name}}" name="{{$name}}" {{$attributes->merge(['onclick' => ''.$onclick])}} >
        <label for="{{$name}}" class="custom-control-label">{{$label}}</label>
    </div>
</div>