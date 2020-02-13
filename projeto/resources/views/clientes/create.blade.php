<h3>Novo CLiente</h3>

<form action="{{ route('clientes.store') }}"  method="POST" >
    @csrf
    <input type="text"   name="nome" id="">
    <input type="submit" value="Salvar">
    
</form>