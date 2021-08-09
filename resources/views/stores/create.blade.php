<form action="{{ route('stores-store') }}" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="mb-3">
    <label for="storeName" class="form-label">Nombre</label>
    <input type="text" class="form-control" name="name" required>
  </div>
  <div class="mb-3">
    <label for="opening_date" class="form-label">Password</label>
    <input type="date" class="form-control" name="opening_date" required>
  </div>
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
    <button type="submit" class="btn btn-primary">Crear</button>
</form>
