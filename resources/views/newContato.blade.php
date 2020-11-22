<h1>Novo contato</h1>

<form action="{{route('contato.store')}}" method="post">
    @csrf
    <input type="text" required name="name" maxlength="50" style="text-transform:lowercase" placeholder="nome">
    <button onclick="window.location.href='{{route('contato.index')}}'">Cancelar</button>
    <input type="submit" value="Adicionar">
</form>
