<h1>Agenda</h1>
<button onclick="window.location.href='{{route('contato.create')}}'">Adicionar</button>

@foreach($contatos as $contato)
    <p><b>Id:</b> {{$contato->id}}</p>
    <p><b>Name:</b> {{$contato->name}}</p>
    <button onclick="window.location.href='{{route('contato.show',['contato'=>$contato->id])}}'">Ver</button>
    <button onclick="window.location.href='{{route('contato.edit',['contato'=>$contato->id])}}'">Editar</button>
    <form action="{{route('contato.destroy',['contato'=>$contato->id])}}" method="post">
        @csrf
        @method('delete')
        <input type="submit" value="Excluir">
    </form>
    <hr>
@endforeach
