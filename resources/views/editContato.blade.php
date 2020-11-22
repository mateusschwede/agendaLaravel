<h1>Editar contato {{$contato->id}}</h1>
<form action="{{route('contato.update',['contato'=>$contato->id])}}" method="post">
    @csrf
    @method('put')
    <input type="text" required name="name" maxlength="50" style="text-transform:lowercase" placeholder="nome" value="{{$contato->name}}">
    <button onclick="window.location.href='{{route('contato.index')}}'">Cancelar</button>
    <input type="submit" value="Atualizar">
</form>
