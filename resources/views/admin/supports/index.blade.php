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
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($supports->items() as $support)
            <tr>
                <td>{{ $support->subject }}</td>
                <td>{{ $support->status}}</td>
                <td>{{ $support->body }}</td>

                <td>
                    <a href="{{ route('supports.show', $support->id) }}" class="text-blue-500">Detalhes</a> - <a href="{{ route('supports.edit', $support->id) }}">Editar</a>
                </td>
            </tr>
        @endforeach
</table>
<x-pagination
:paginator="$supports"
:appends="$filters"
/>
