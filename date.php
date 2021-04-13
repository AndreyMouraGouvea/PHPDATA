<?php
ini_set('default_charset', 'utf-8');
// trabalhando com datas!
// definindo a zona de fuso-horário => ver pelo php.net
date_default_timezone_set('America/Sao_Paulo');
// mostrando o dia de hoje;
// D - maiúsculo => Dia da semana em inglês Y - maiúsculo => 4 dígitos
// d => número do dia do mês
// m => número do mês do ano
// M => nome do mês
// y => número do ano em 2 dígitos
// Y => número do ano em 4 dígitos
echo date('d/m/y H:i:s');

// h => número das horas AM (12h)
// H => número das horas PM (24h)

// i => mostrar minutos
// s => mostrar os segundos
// para mostrar se é AM ou PM, acrescetamos "a" depois do "s", ficando :sa

$dia = date('d');
echo "<br>Dia:", $dia;
// ou echo "<br>Dia:".$dia."";
?>