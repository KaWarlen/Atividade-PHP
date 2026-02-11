<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cursos</title>
</head>
<body>
    <h1>Novos Cursos</h1>
    <form action='/cursos' method="post">
        @csrf
        <label for="nome">Nome do Curso</label>
        <input type="text" name="nome" id="nome" placeholder="Digite o nome do curso"><br><br>
        <button type="submit">Salvar</button>
    </form>
</body>
</html>