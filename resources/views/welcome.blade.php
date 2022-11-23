<div style="
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        width: 100%;
        display: flex;
        justify-content: center;
        align-itens: center; 
    ">

    <form action="{{ route('welcome') }}" method="POST"
        style="
            width: 100%;
            padding: 30px;
            border: 1px solid #c9c9c9;
            border-radius: 6px;
            margin-top: 30px;
            max-width: 400px;
        ">
        @csrf
        <div style="display: flex; flex-direction:column;">
            <label for="">Usuário:</label>
            <input type="text" name="usuario" value="{{ old('usuario') }}">
            {{ $errors->has('usuario') ? $errors->first('usuario') : '' }}
        </div>

        <div style="display: flex; flex-direction:column; margin-top: 25px;">
            <label for="">Senha:</label>
            <input type="password" name="senha" value="{{ old('senha') }}">
            {{ $errors->has('senha') ? $errors->first('senha') : '' }}
        </div>
        
        <button type="submit" style="margin-top: 25px; padding: 3px 6px;">Entrar</button>

        {{ isset($erro) && $erro != '' ? $erro : ''}}
    </form>

</div>