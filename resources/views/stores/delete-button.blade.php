<form action="{{ route('stores-destroy', ['store'=>$id]) }}" method="post" class="d-inline">
    <input type="hidden" name="_method" value="DELETE">
    @csrf
    <button type="submit" class="btn btn-danger" tar="{{$id}}">Eliminar</button>
</form>