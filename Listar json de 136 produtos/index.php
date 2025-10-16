<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Json Rigon e Guilherme</title>
</head>
<body class="p-4">

    <h1 class="mb-4">Aqui está listado</h1>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Código produto SGMaster</th>
                <th>Quantidade</th>
                <th>Valor Unitario</th>
                <th>Perc Acrescimo</th>
                <th>Valor Acrescimo</th>
                <th>Perc Desconto</th>
                <th>Valor Desconto</th>
            </tr>
        </thead>
        <tbody>
        <?php
            // Lê o conteúdo do arquivo JSON
            $json = file_get_contents('json.json');

            // Decodifica em array associativo
            $data = json_decode($json, true);

            // Caso o JSON contenha vários itens (array de objetos)
            foreach ($data as $item){
             echo "
                <tr>
                    <td>{$item['codProdutoSgMaster']}</td>
                    <td>{$item['qtde']}</td>
                    <td>" .number_format($item['valorUnitario'],2,',','.') ." </td>
                    <td>{$item['percAcrescimo']}</td>
                    <td>{$item['valorAcrescimo']}</td>
                    <td>{$item['percDesconto']}</td>
                    <td> " .number_format($item['valorDesconto'],2,',','.') . "</td>
                </tr>
             ";
            }
        ?>
        </tbody>
    </table>

</body>
</html>
