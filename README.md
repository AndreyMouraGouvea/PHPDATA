# Trabalhando com Datas em PHP!

### => Em index.php e tarefa.php é desenvolvido o que foi solicitado, que é mostrar o nome, e a sua idade contendo anos, meses, dias e horas.

### => Em get.php e date.php nós temos outros exemplos de como usar o date() do php

### Colocar formatação de caracteres na página PHP

```
ini_set('default_charset', 'utf-8');
```

### Usado para capturar o fuso horário de SP, disponível em php.net as demais localidades

```
date_default_timezone_set('America/Sao_Paulo'); 
```

### Mostrar uma data => Tudo descrito detalhadamente em date.php

```
echo date('d/m/y H:i:s');
```

### Mostrar só um valor separado
```
$dia = date('d');
```
### Converter valor da DATA do Input
```
$nasc = $_GET['nasc'];    
$tempo = strtotime($nasc);
$data_formatada =  date('d/m/y', $tempo);
```

- [x] Dia
- [x] Mês
- [x] Ano
- [x] Hora
- [x] Minuto
- [x] Segundo