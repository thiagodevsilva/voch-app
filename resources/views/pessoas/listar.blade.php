<style>
    table, th, td {
        border: 1px solid black;
    }
    td {
        padding: 3px 25px
    }
</style>

<div style="
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column; 
    ">

    <div style="width: 100%; display: flex; justify-content: space-around">
        <a href="{{ route('nova.pessoa') }}">Adicionar pessoa</a>    
        <a href="{{ route('deslogar') }}">Deslogar</a>
    </div>

    <h1 style="text-align: center">PESSOAS</h1>

    @if (isset($msg))
    {{ $msg }}
    @endif

    <div style="width: 100%; display: flex; justify-content: center;">
        <table style="width: 100%; max-width: 600px; text-align: center;">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Idade</th>
                </tr>
            </thead>
            <tbody>
                @if (isset($query))
                    @foreach ($query as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->age }}</td>
                        <td><a href="/editar/{{$item->id}}">Editar</a></td>
                        <td><a href="/excluir/{{$item->id}}">Excluir</a></td>
                    </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
</div>