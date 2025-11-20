<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Agenda Estudantil</title>
</head>
<body>

    <h2>Agenda Estudantil</h2>

    <form action="processa_agenda.php" method="POST">

        <h3>Dados Pessoais</h3>
        
        <label>Nome:</label><br>
        <input type="text" name="nome" required><br><br>

        <label>Idade:</label><br>
        <input type="number" name="idade" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>


        <h3>Compromissos do Dia</h3>

        <label>Descrição do compromisso:</label><br>
        <textarea name="compromisso" rows="4" cols="40" required></textarea><br><br>

        <button type="submit">Salvar compromisso</button>
    </form>

</body>
</html>
