@props(['id','name','route','parameter1','parameter2'])

@php
  $parameter2 = $parameter2 ?? NULL;
@endphp

<div class="modal fade" id="modal-default{{$id}}" style="display: none;" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Delete {{$name}}</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <p>If you proceed with deleting the item, it cannot be recovered. Do you really want to delete?</p>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <form method="post" action="{{$parameter2 ? route($route,[$parameter1,$parameter2]) : route($route,$parameter1)}}" novalidate>
          @method('delete')
          @CSRF
          <button type="submit" class="btn btn-danger">Delete</button>
        </form>
      </div>
    </div>
  </div>
</div>