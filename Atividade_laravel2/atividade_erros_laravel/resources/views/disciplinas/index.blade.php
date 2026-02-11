<!DOCTYPE html>
<html>
<body>
    <h1>Disciplinas Disponíveis</h1>
    <a href="/disciplinas/nova">Cadastrar Nova Disciplina</a>
    <ul>
        @foreach($disciplinas as $item)
            <li>
                {{ $item['nome'] }} 
                <a href="/disciplinas/{{ $item['id'] }}">[Ver Detalhes]</a>
            </li>
        @endforeach
    </ul>
</body>
</html>