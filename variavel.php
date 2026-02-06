
<?php
/*Utiliza a variavel dentro de outra variavel para executação do valor reservado em memoria.*/
${'invalid-name'} = 'bar';
$name = 'invalid-name';
echo ${'invalid-name'}, " ", $$name;
?>