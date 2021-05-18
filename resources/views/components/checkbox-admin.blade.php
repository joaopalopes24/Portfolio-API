@props(['id','name','value','label','parameter'])

@php
  $name = $name ?? $id;
  $value = $value ?? '';
  $parameter = $parameter ?? '';
@endphp

<div class="row">
  <div class="col-xl-4 col-md-6 form-group">
    <div class="custom-control custom-checkbox">
      <input class="custom-control-input" type="checkbox" id="{{$id}}" name="{{$name}}" value="{{$value}}" {{ $parameter === '1' ? 'checked' : ''}} {!!$attributes->merge()!!}>
      <label for="{{$id}}" class="custom-control-label">{{$label}}</label>
    </div>
  </div>
</div>