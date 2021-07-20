@if(session('status') || $errors->has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{session('status') ?? $errors->first('success')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@elseif($errors->has('warning'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
    {{$errors->first('warning')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@elseif($errors->has('error'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{$errors->first('error')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
