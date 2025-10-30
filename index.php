<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções PHP - Uma a Uma</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            line-height: 1.6;
            background-color: #f8f9fa;
            color: #212529;
            padding: 20px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            overflow: hidden;
        }

        h1 {
            background-color: #007bff;
            color: white;
            padding: 20px;
            margin: 0;
            text-align: center;
        }

        .exercicio {
            padding: 20px;
            border-bottom: 1px solid #dee2e6;
        }

        .exercicio:last-child {
            border-bottom: none;
        }

        .exercicio h3 {
            margin-top: 0;
            color: #0056b3;
            border-bottom: 2px solid #007bff;
            padding-bottom: 5px;
        }

        .resultado {
            background-color: #e9f5ff;
            border: 1px solid #b3d7ff;
            padding: 10px 15px;
            border-radius: 4px;
            margin-top: 10px;
        }

        .resultado strong {
            color: #004a99;
        }

        code {
            background-color: #e8e8e8;
            padding: 2px 5px;
            border-radius: 3px;
            font-family: 'Consolas', 'Monaco', monospace;
        }

        .exemplo {
            background: #f8f9fa;
            border-left: 4px solid #6c757d;
            padding: 10px 15px;
            margin: 10px 0;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>DESAFIO 3-BRUNO MARTINHO</h1>

        <!-- FUNÇÕES DE STRING -->
        <div class="exercicio">
            <h3>1. strlen() - Contar caracteres</h3>
            <div class="exemplo">
                <code>$texto = "Olá, mundo!";<br>echo strlen($texto);</code>
            </div>
            <div class="resultado">
                <strong>Saída:</strong> 
                <?php
                $texto = "Olá, mundo!";
                echo strlen($texto); // 11
                ?>
            </div>
        </div>

        <div class="exercicio">
            <h3>2. str_replace() - Substituir texto</h3>
            <div class="exemplo">
                <code>$frase = "Eu gosto de maçã.";<br>$nova_frase = str_replace("maçã", "banana", $frase);<br>echo $nova_frase;</code>
            </div>
            <div class="resultado">
                <strong>Saída:</strong> 
                <?php
                $frase = "Eu gosto de maçã.";
                $nova_frase = str_replace("maçã", "banana", $frase);
                echo $nova_frase;
                ?>
            </div>
        </div>

        <div class="exercicio">
            <h3>3. substr() - Parte da string</h3>
            <div class="exemplo">
                <code>$email = "contato@exemplo.com";<br>echo substr($email, 8); // exemplo.com<br>echo substr($email, 0, 7); // contato</code>
            </div>
            <div class="resultado">
                <strong>Saída:</strong><br>
                <?php
                $email = "contato@exemplo.com";
                echo substr($email, 8) . "<br>"; // exemplo.com
                echo substr($email, 0, 7); // contato
                ?>
            </div>
        </div>

        <div class="exercicio">
            <h3>4. strtolower() - Minúsculas</h3>
            <div class="exemplo">
                <code>$texto = "Isso É Um TESTE";<br>echo strtolower($texto);</code>
            </div>
            <div class="resultado">
                <strong>Saída:</strong> 
                <?php
                $texto = "Isso É Um TESTE";
                echo strtolower($texto);
                ?>
            </div>
        </div>

        <div class="exercicio">
            <h3>5. strtoupper() - Maiúsculas</h3>
            <div class="exemplo">
                <code>$texto = "Isso É Um TESTE";<br>echo strtoupper($texto);</code>
            </div>
            <div class="resultado">
                <strong>Saída:</strong> 
                <?php
                $texto = "Isso É Um TESTE";
                echo strtoupper($texto);
                ?>
            </div>
        </div>

        <div class="exercicio">
            <h3>6. ucfirst() - Primeira maiúscula</h3>
            <div class="exemplo">
                <code>$nome = "joão";<br>echo ucfirst($nome);</code>
            </div>
            <div class="resultado">
                <strong>Saída:</strong> 
                <?php
                $nome = "joão";
                echo ucfirst($nome);
                ?>
            </div>
        </div>

        <div class="exercicio">
            <h3>7. trim() - Remove espaços</h3>
            <div class="exemplo">
                <code>$entrada = "   olá   ";<br>echo trim($entrada);</code>
            </div>
            <div class="resultado">
                <strong>Saída:</strong> "<?php
                $entrada = "   olá   ";
                echo trim($entrada);
                ?>"
            </div>
        </div>

        <div class="exercicio">
            <h3>8. explode() - String para array</h3>
            <div class="exemplo">
                <code>$data = "29-10-2025";<br>$partes = explode("-", $data);<br>echo $partes[0]; // Dia</code>
            </div>
            <div class="resultado">
                <strong>Saída:</strong> 
                <?php
                $data = "29-10-2025";
                $partes = explode("-", $data);
                echo $partes[0]; // 29
                ?>
            </div>
        </div>

        <div class="exercicio">
            <h3>9. implode() - Array para string</h3>
            <div class="exemplo">
                <code>$array = ["Maçã", "Banana", "Laranja"];<br>echo implode(", ", $array);</code>
            </div>
            <div class="resultado">
                <strong>Saída:</strong> 
                <?php
                $array = ["Maçã", "Banana", "Laranja"];
                echo implode(", ", $array);
                ?>
            </div>
        </div>

        <div class="exercicio">
            <h3>10. strpos() - Posição do texto</h3>
            <div class="exemplo">
                <code>$frase = "O gato subiu no telhado.";<br>$posicao = strpos($frase, "gato");<br>echo "Posição: " . $posicao;</code>
            </div>
            <div class="resultado">
                <strong>Saída:</strong> 
                <?php
                $frase = "O gato subiu no telhado.";
                $posicao = strpos($frase, "gato");
                echo "Posição: " . $posicao;
                ?>
            </div>
        </div>

        <div class="exercicio">
            <h3>11. sprintf() - String formatada</h3>
            <div class="exemplo">
                <code>$nome = "Maria";<br>$idade = 30;<br>echo sprintf("Nome: %s, Idade: %d", $nome, $idade);</code>
            </div>
            <div class="resultado">
                <strong>Saída:</strong> 
                <?php
                $nome = "Maria";
                $idade = 30;
                echo sprintf("Nome: %s, Idade: %d", $nome, $idade);
                ?>
            </div>
        </div>

        <!-- FUNÇÕES NUMÉRICAS -->
        <div class="exercicio">
            <h3>12. number_format() - Formatar números</h3>
            <div class="exemplo">
                <code>$preco = 1250.75;<br>echo number_format($preco, 2, ',', '.');</code>
            </div>
            <div class="resultado">
                <strong>Saída:</strong> 
                <?php
                $preco = 1250.75;
                echo number_format($preco, 2, ',', '.');
                ?>
            </div>
        </div>

        <div class="exercicio">
            <h3>13. round() - Arredondar</h3>
            <div class="exemplo">
                <code>echo round(4.3) . " | " . round(4.7) . " | " . round(2.3456, 2);</code>
            </div>
            <div class="resultado">
                <strong>Saída:</strong> 
                <?php
                echo round(4.3) . " | " . round(4.7) . " | " . round(2.3456, 2);
                ?>
            </div>
        </div>

        <div class="exercicio">
            <h3>14. ceil() - Arredondar para cima</h3>
            <div class="exemplo">
                <code>echo ceil(4.3) . " | " . ceil(4.0);</code>
            </div>
            <div class="resultado">
                <strong>Saída:</strong> 
                <?php
                echo ceil(4.3) . " | " . ceil(4.0);
                ?>
            </div>
        </div>

        <div class="exercicio">
            <h3>15. floor() - Arredondar para baixo</h3>
            <div class="exemplo">
                <code>echo floor(4.7) . " | " . floor(4.0);</code>
            </div>
            <div class="resultado">
                <strong>Saída:</strong> 
                <?php
                echo floor(4.7) . " | " . floor(4.0);
                ?>
            </div>
        </div>

        <div class="exercicio">
            <h3>16. abs() - Valor absoluto</h3>
            <div class="exemplo">
                <code>$diferenca = 10 - 25; // -15<br>echo abs($diferenca);</code>
            </div>
            <div class="resultado">
                <strong>Saída:</strong> 
                <?php
                $diferenca = 10 - 25;
                echo abs($diferenca);
                ?>
            </div>
        </div>

        <div class="exercicio">
            <h3>17. rand() - Número aleatório</h3>
            <div class="exemplo">
                <code>echo mt_rand(1, 10);</code>
            </div>
            <div class="resultado">
                <strong>Saída:</strong> 
                <?php
                echo mt_rand(1, 10);
                ?>
            </div>
        </div>

        <div class="exercicio">
            <h3>18. max() - Maior valor</h3>
            <div class="exemplo">
                <code>echo max(5, 10, 2, 8);</code>
            </div>
            <div class="resultado">
                <strong>Saída:</strong> 
                <?php
                echo max(5, 10, 2, 8);
                ?>
            </div>
        </div>

        <div class="exercicio">
            <h3>19. min() - Menor valor</h3>
            <div class="exemplo">
                <code>echo min(5, 10, 2, 8);</code>
            </div>
            <div class="resultado">
                <strong>Saída:</strong> 
                <?php
                echo min(5, 10, 2, 8);
                ?>
            </div>
        </div>

        <div class="exercicio">
            <h3>20. pow() - Potência</h3>
            <div class="exemplo">
                <code>echo pow(2, 3); // 2³</code>
            </div>
            <div class="resultado">
                <strong>Saída:</strong> 
                <?php
                echo pow(2, 3);
                ?>
            </div>
        </div>

        <div class="exercicio">
            <h3>21. sqrt() - Raiz quadrada</h3>
            <div class="exemplo">
                <code>echo sqrt(9) . " | " . sqrt(100);</code>
            </div>
            <div class="resultado">
                <strong>Saída:</strong> 
                <?php
                echo sqrt(9) . " | " . sqrt(100);
                ?>
            </div>
        </div>

        <!-- VERIFICAÇÃO DE TIPOS -->
        <div class="exercicio">
            <h3>22. is_numeric() - Verificar se é número</h3>
            <div class="exemplo">
                <code>var_dump(is_numeric(123));<br>var_dump(is_numeric("123.45"));<br>var_dump(is_numeric("Olá"));</code>
            </div>
            <div class="resultado">
                <strong>Saída:</strong><br>
                <?php
                var_dump(is_numeric(123));
                echo "<br>";
                var_dump(is_numeric("123.45"));
                echo "<br>";
                var_dump(is_numeric("Olá"));
                ?>
            </div>
        </div>

        <div class="exercicio">
            <h3>23. is_int() - Verificar se é inteiro</h3>
            <div class="exemplo">
                <code>var_dump(is_int(123));<br>var_dump(is_int(123.45));<br>var_dump(is_int("123"));</code>
            </div>
            <div class="resultado">
                <strong>Saída:</strong><br>
                <?php
                var_dump(is_int(123));
                echo "<br>";
                var_dump(is_int(123.45));
                echo "<br>";
                var_dump(is_int("123"));
                ?>
            </div>
        </div>

        <div class="exercicio">
            <h3>24. is_float() - Verificar se é decimal</h3>
            <div class="exemplo">
                <code>var_dump(is_float(123.45));<br>var_dump(is_float(123));</code>
            </div>
            <div class="resultado">
                <strong>Saída:</strong><br>
                <?php
                var_dump(is_float(123.45));
                echo "<br>";
                var_dump(is_float(123));
                ?>
            </div>
        </div>

        <!-- FUNÇÕES DE ARRAY -->
        <div class="exercicio">
            <h3>25. count() - Contar elementos</h3>
            <div class="exemplo">
                <code>$frutas = ["Maçã", "Banana", "Laranja"];<br>echo count($frutas);</code>
            </div>
            <div class="resultado">
                <strong>Saída:</strong> 
                <?php
                $frutas = ["Maçã", "Banana", "Laranja"];
                echo count($frutas);
                ?>
            </div>
        </div>

        <div class="exercicio">
            <h3>26. array_push() - Adicionar no final</h3>
            <div class="exemplo">
                <code>$lista = ["Arroz", "Feijão"];<br>array_push($lista, "Macarrão");<br>print_r($lista);</code>
            </div>
            <div class="resultado">
                <strong>Saída:</strong><br>
                <?php
                $lista = ["Arroz", "Feijão"];
                array_push($lista, "Macarrão");
                print_r($lista);
                ?>
            </div>
        </div>

        <div class="exercicio">
            <h3>27. array_pop() - Remover do final</h3>
            <div class="exemplo">
                <code>$lista = ["Arroz", "Feijão", "Macarrão"];<br>$ultimo = array_pop($lista);<br>echo "Removido: $ultimo";</code>
            </div>
            <div class="resultado">
                <strong>Saída:</strong> 
                <?php
                $lista = ["Arroz", "Feijão", "Macarrão"];
                $ultimo = array_pop($lista);
                echo "Removido: $ultimo";
                ?>
            </div>
        </div>

        <div class="exercicio">
            <h3>28. array_shift() - Remover do início</h3>
            <div class="exemplo">
                <code>$lista = ["Arroz", "Feijão", "Macarrão"];<br>$primeiro = array_shift($lista);<br>echo "Removido: $primeiro";</code>
            </div>
            <div class="resultado">
                <strong>Saída:</strong> 
                <?php
                $lista = ["Arroz", "Feijão", "Macarrão"];
                $primeiro = array_shift($lista);
                echo "Removido: $primeiro";
                ?>
            </div>
        </div>

        <div class="exercicio">
            <h3>29. array_key_exists() - Verificar chave</h3>
            <div class="exemplo">
                <code>$config = ['usuario' => 'admin', 'senha' => '123'];<br>echo array_key_exists('usuario', $config) ? 'Existe' : 'Não existe';</code>
            </div>
            <div class="resultado">
                <strong>Saída:</strong> 
                <?php
                $config = ['usuario' => 'admin', 'senha' => '123'];
                echo array_key_exists('usuario', $config) ? 'Existe' : 'Não existe';
                ?>
            </div>
        </div>

        <div class="exercicio">
            <h3>30. in_array() - Verificar valor</h3>
            <div class="exemplo">
                <code>$permissoes = ['ler', 'escrever', 'executar'];<br>echo in_array('escrever', $permissoes) ? 'Encontrado' : 'Não encontrado';</code>
            </div>
            <div class="resultado">
                <strong>Saída:</strong> 
                <?php
                $permissoes = ['ler', 'escrever', 'executar'];
                echo in_array('escrever', $permissoes) ? 'Encontrado' : 'Não encontrado';
                ?>
            </div>
        </div>

        <div class="exercicio">
            <h3>31. array_merge() - Juntar arrays</h3>
            <div class="exemplo">
                <code>$array1 = ["a", "b"];<br>$array2 = ["c", "d"];<br>print_r(array_merge($array1, $array2));</code>
            </div>
            <div class="resultado">
                <strong>Saída:</strong><br>
                <?php
                $array1 = ["a", "b"];
                $array2 = ["c", "d"];
                print_r(array_merge($array1, $array2));
                ?>
            </div>
        </div>

        <div class="exercicio">
            <h3>32. array_keys() - Pegar chaves</h3>
            <div class="exemplo">
                <code>$capitais = ['Brasil' => 'Brasília', 'Portugal' => 'Lisboa'];<br>print_r(array_keys($capitais));</code>
            </div>
            <div class="resultado">
                <strong>Saída:</strong><br>
                <?php
                $capitais = ['Brasil' => 'Brasília', 'Portugal' => 'Lisboa'];
                print_r(array_keys($capitais));
                ?>
            </div>
        </div>

        <div class="exercicio">
            <h3>33. array_values() - Pegar valores</h3>
            <div class="exemplo">
                <code>$capitais = ['Brasil' => 'Brasília', 'Portugal' => 'Lisboa'];<br>print_r(array_values($capitais));</code>
            </div>
            <div class="resultado">
                <strong>Saída:</strong><br>
                <?php
                $capitais = ['Brasil' => 'Brasília', 'Portugal' => 'Lisboa'];
                print_r(array_values($capitais));
                ?>
            </div>
        </div>

        <!-- FUNÇÕES DE DATA/HORA -->
        <div class="exercicio">
            <h3>34. DateTime() - Data atual</h3>
            <div class="exemplo">
                <code>$agora = new DateTime();<br>echo $agora->format('d/m/Y H:i:s');</code>
            </div>
            <div class="resultado">
                <strong>Saída:</strong> 
                <?php
                $agora = new DateTime();
                echo $agora->format('d/m/Y H:i:s');
                ?>
            </div>
        </div>

        <div class="exercicio">
            <h3>35. modify() - Modificar data</h3>
            <div class="exemplo">
                <code>$hoje = new DateTime();<br>echo $hoje->modify('+10 days')->format('d/m/Y');</code>
            </div>
            <div class="resultado">
                <strong>Saída:</strong> 
                <?php
                $hoje = new DateTime();
                echo $hoje->modify('+10 days')->format('d/m/Y');
                ?>
            </div>
        </div>

        <div class="exercicio">
            <h3>36. diff() - Diferença entre datas</h3>
            <div class="exemplo">
                <code>$nascimento = new DateTime('1990-05-15');<br>$hoje = new DateTime();<br>echo $hoje->diff($nascimento)->y . " anos";</code>
            </div>
            <div class="resultado">
                <strong>Saída:</strong> 
                <?php
                $nascimento = new DateTime('1990-05-15');
                $hoje = new DateTime();
                echo $hoje->diff($nascimento)->y . " anos";
                ?>
            </div>
        </div>

        <div class="exercicio">
            <h3>37. createFromFormat() - Criar de formato específico</h3>
            <div class="exemplo">
                <code>$data = DateTime::createFromFormat('d/m/Y', '20/03/2026');<br>echo $data->format('Y-m-d');</code>
            </div>
            <div class="resultado">
                <strong>Saída:</strong> 
                <?php
                $data = DateTime::createFromFormat('d/m/Y', '20/03/2026');
                echo $data->format('Y-m-d');
                ?>
            </div>
        </div>

    </div>
</body>
</html>