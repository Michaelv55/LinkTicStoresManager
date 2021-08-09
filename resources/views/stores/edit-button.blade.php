<form action="{{ route('stores-edit', ['store'=>$id]) }}" method="get" class="d-inline">
    @csrf
    <button type="button" class="btn btn-success" tar="{{$id}}">Editar</button>
</form>