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

    <h1>Cadastrar pessoa</h1>

    <form action="{{ route('add.pessoa') }}" method="POST"
        style="
            width: 100%;
            padding: 30px;
            border: 1px solid #c9c9c9;
            border-radius: 6px;
            margin-top: 30px;
            max-width: 400px;
        ">
        @csrf
        <div>
            <label for="">*Nome:</label>
            <input type="text" name="nome">
        </div>    
        <div style="margin-top: 25px">
            <label for="">*Idade:</label>
            <input type="number" name="idade">
        </div>
        <button type="submit" style="margin-top: 25px">Inserir</button>
        <a href="/pessoas">Voltar</a>
    </form>

    @if (isset($msg))
    {{ $msg }}
    @endif

</div>
