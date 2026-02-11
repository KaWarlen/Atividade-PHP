<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar produto</title>
</head>
<body>
    <h1>Cadastro de Produto</h1>
    <form action="/produtos" method="post">
        @csrf
        <label>Nome do produto</label><br>
        <input type="text" name="nome"><br><br>
        <button type="submit">Cadastrar</button>
    </form>
    
</body>
</html>