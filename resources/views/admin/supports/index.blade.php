<h1>Listagem dos supports</h1>

<br>

<a href="{{ route('supports.create') }}">Criar novo suporte</a>

<hr>

<table>
    <thead>
        <tr>
            <th>Status</th>
            <th>Assunto</th>
            <th>Descrição</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($supports as $support)
            <tr>
                <td>{{ $support->status }}</td>
                <td>{{ $support->subject }}</td>
                <td>{{ $support->body }}</td>
                <td>
                    {{--  <a href="{{ route('supports.edit', $support->id) }}">Editar</a>  --}}
                </td>
            </tr>
        @endforeach
</table>
