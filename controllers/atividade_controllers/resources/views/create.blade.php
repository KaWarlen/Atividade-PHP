<form action="/produtos" method="POST">
    @csrf <label>Nome do Produto:</label>
    <input type="text" name="nome">
    <button type="submit">Enviar</button>
</form>