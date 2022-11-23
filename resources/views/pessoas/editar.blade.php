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

    <h1>Atualizar pessoa</h1>

    <form action="{{ route('edit.pessoa') }}" method="POST" 
        style="
            width: 100%;
            padding: 30px;
            border: 1px solid #c9c9c9;
            border-radius: 6px;
            margin-top: 30px;
            max-width: 400px;
        ">
        @csrf
        <input type="hidden" name="id" value="{{ isset($dados[0]->id) ? $dados[0]->id : ''}}">
        <div>
            <label for="">*Nome:</label>
            <input type="text" name="nome" value="{{ isset($dados[0]->name) ? $dados[0]->name : ''}}">
        </div>    
        <div style="margin-top: 25px">
            <label for="">*Idade:</label>
            <input type="number" name="idade" value="{{ isset($dados[0]->age) ? $dados[0]->age : ''}}">
        </div>
        <button type="submit" style="margin-top: 25px">Atualizar</button>
        <a href="/pessoas">Voltar</a>
    </form>

    @if (isset($msg))
    {{ $msg }}
    @endif

</div>