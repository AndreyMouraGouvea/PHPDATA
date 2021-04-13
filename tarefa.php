<!-- porque é sempre 1º de janeiro de 1970,
 Porque - '1º de janeiro de 1970' geralmente chamado de "data de época" é a
 data em que a hora começou para computadores Unix, e esse carimbo de data / 
 hora é marcado como '0'. Qualquer momento desde essa data é calculado com base
  no número de segundos decorridos. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Data - Andrey</title>
</head>
<body>
    <section class="parte1">
    <?php

        ini_set('default_charset', 'utf-8');
        date_default_timezone_set('America/Sao_Paulo');
    
        
        if($_GET){
            $nome = $_GET['nome'];
            $date = $_GET['nasc'];    //formato Ano/Mes/Dia
            echo "Seu nome é $nome, você tem ".calcularIdade($date)." anos.";
            
        }
        function calcularIdade($date){
            $date = date('Y-m-d', strtotime(str_replace("/", "-", $date)));
            $time = strtotime($date);

            if($time === false){
                return '';
            }
            $year_diff = '';
            $date = date('Y-m-d', $time);

            list ($year, $month, $day) = explode('-', $date);

            $year_diff = date('Y') - $year;
            $month_diff = date('m') - $month;
            $day_diff = date('d') -$day;

            if ($day_diff < 0 && $month_diff < 0 || $month_diff < 0){
                $year_diff--;
            }
            return $year_diff;
        }
        // function calcularMes($date){
        //     $total_mes = strtotime(date('m')) - strtotime($date('m'));
        //     date('m', $total_mes);
        //     if ($total_mes > date) {
        //         $total_mes = strtotime($date('m')) - strtotime(date('m'));
        //     }
        //     return $total_mes;
        // }
         
    
        
    ?>

    </section>

</body>
</html>
<!-- https://pt.stackoverflow.com/questions/320027/subtrair-datas-em-php#:~:text=Subtrair%20datas%20em%20PHP%20%5Bduplicada%5D&text=Por%20exemplo%3A,menos%20o%20que%20eu%20queria. -->