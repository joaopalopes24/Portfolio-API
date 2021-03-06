@props(['id','name','value','label','parameter'])

@php
$parameter = $parameter ?? '';
@endphp

<div class="col-xl-4 col-sm-6 form-group">
    <div class="custom-control custom-checkbox">
        <input class="custom-control-input @error('permissions') is-invalid @elseif(old('permissions')) is-valid @enderror" type="checkbox" id="{{$id}}" name="{{$name}}" value="{{$value}}" {{ $parameter === '1' ? 'checked' : ''}}>
        <label for="{{$id}}" class="custom-control-label">{{$label}}</label>
    </div>
</div>