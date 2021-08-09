@extends('master')

@section('content')
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#modal-create-store">
  Crear tienda
</button>

<!-- Modal to create -->
<div class="modal fade" id="modal-create-store" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Crear tienda</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        @component('stores.create')@endcomponent
      </div>
    </div>
  </div>
</div>

@endsection