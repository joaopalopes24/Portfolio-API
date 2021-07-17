@props(['parameter'])

@if($parameter->hasPages() != false)
<div class="card-footer clearfix" style="padding-bottom: 0px;" ;>
    {{$parameter->links()}}
</div>
@endif