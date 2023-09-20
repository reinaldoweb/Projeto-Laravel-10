<h1>Novo Suporte</h1>

<form action="{{ route('supports.store') }}" method="POST">
<input type="text" placeholder="Assunto" name="subject"> <br> <br>
@csrf
@method('POST')
<textarea name="body" cols="30" rows="" placeholder="Descricao"></textarea><br><br>
<button type="submit">Enviar</button>
</form>
