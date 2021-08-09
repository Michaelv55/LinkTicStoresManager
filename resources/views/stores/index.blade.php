@extends('master')

@section('content')

<div class="alert alert-success @if(!isset($successMessage)) d-none @endif" role="alert">
  {{ $successMessage }}
</div>
<div class="alert alert-danger @if(!isset($errorMessage)) d-none @endif" role="alert">
  {{ $errorMessage }}
</div>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#modal-create-store">
  Crear tienda
</button>


<table class="table table-light">
    <thead>
        <th>Nombre</th>
        <th>Fecha de apertura</th>
        <th>Acciones</th>
    </thead>
    <tbody>
        @foreach($storesData as $store)
        <tr>
            <td>{{ $store->name }}</td>
            <td>{{ $store->opening_date }}</td>
            <td>
                @component('stores.edit-button', ['id'=>$store->id])@endcomponent
                @component('stores.delete-button', ['id'=>$store->id])@endcomponent
            </td>
        </tr>
        @endforeach
    </tbody>
</table>



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