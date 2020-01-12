<form action="{{url('products')}}" method="POST">
    @csrf
    <input type="text" name="name">
    <textarea name="description" id="" cols="30" rows="10"></textarea>
    <button type="submit" name="guardar">Guardar</button>
</form>