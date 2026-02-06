/*O PHP oferece uma sintaxe alternativa que substitui as chaves {} por : e endif;.
Isso é extremamente útil quando você está misturando código PHP dentro de um arquivo HTML,
pois torna a leitura muito mais limpa.*/

<?php $idade = 15; ?>

<?php if ($idade < 13): ?>
    <p>Categoria: Infantil</p>
<?php elseif ($idade < 18): ?>
    <p>Categoria: Juvenil</p>
<?php else: ?>
    <p>Categoria: Adulto</p>
<?php endif; ?>