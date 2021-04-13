
<form action="" method="">
Nome:
<input type="text" name="nome"><br>
Nascimento:
<input type="date" name="nasc"><br>
<button type="submit">Enviar</button>
</form>

<?php
ini_set('default_charset', 'utf-8');
date_default_timezone_set('America/Sao_Paulo');
if($_GET){
    $nome = $_GET['nome'];
    $nasc = $_GET['nasc'];    //formato Ano/Mes/Dia 
    $tempo = strtotime($nasc);
    $data_formatada = date('d/m/y', $tempo);
    echo "Seu nome é $nome, você tem $data_formatada anos.";
    
}

?>
<!-- como calcular idade da pessoa: 
https://www.youtube.com/watch?v=9fhb9wWvzLw -->

<!-- trabalhando com datas:
https://www.youtube.com/watch?v=ltsy4huYwnQ -->

<!-- porque é sempre 1º de janeiro de 1970,
 Porque - '1º de janeiro de 1970' geralmente chamado de "data de época" é a
 data em que a hora começou para computadores Unix, e esse carimbo de data / 
 hora é marcado como '0'. Qualquer momento desde essa data é calculado com base
  no número de segundos decorridos. -->