<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fornecedor</title>
</head>
<body>
    <h3>Fornecedor</h3>
</body>
</html>

{{--@dd($fornecedores)

@if (count($fornecedores) > 0 && count($fornecedores) <= 10)
    <h3>Between 0 and 10</h3>
@elseif (count($fornecedores) > 10)
    <h3>Greater than 10</h3>
@else (count($fornecedores) = 0)
    <h3>No one</h3>
@endif


<b>Fornecedor:</b> {{ $fornecedores[0]['nome'] }}
<br>
<b>Status:</b> {{ $fornecedores[0]['status'] }}
<br>

//Condição IF:

@if ($fornecedores[0]['status'] == 'N')
    Fornecedor Inativo!
@elseif ( !($fornecedores[0]['status'] == 'N'))
    Fornecedor Inativo!
@endif

//Condição Unless:

@unless ($fornecedores[0]['status'] == 'S')
    Fornecedor Inativo!
@endunless



//Função Isset & Funçao Empty & switch and case:--}}

@isset($fornecedores)
    Fornecedor: {{ $fornecedores[0]['nome'] }}
    <br>
    Status: {{ $fornecedores[0]['status'] }}
    <br>
    CNPJ: {{ $fornecedores[0]['cnpj'] ?? 'Dado não foi preenchido'}}
    <br>
    Telefone: ({{ $fornecedores[1]['ddd'] ?? 'Dado não foi preenchido'}}) {{ $fornecedores[1]['telefone'] ?? '' }}
    @switch ($fornecedores[1]['ddd'])
        @case ('11')
            São Paulo - SP
            @break
        @case ('19')
            Campinas - SP
            @break
        @default
            Estado não identificado
    @endswitch

@endisset
{{--    @empty($fornecedores[0]['cnpj'])
        Variável vazia
    @endempty

@endisset--}}





