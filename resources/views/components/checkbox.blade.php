@props(['id','name','value','label','parameter'])

<div class="col-xl-3 col-sm-6">
  <div class="form-group">
    <div class="custom-control custom-checkbox">
      <input class="custom-control-input" type="checkbox" id="{{$id}}" name="{{$name}}" value="{{$value}}" {{ $parameter === '1' ? 'checked' : ''}}>
      <label for="{{$id}}" class="custom-control-label">{{$label}}</label>
    </div>
  </div>
</div>