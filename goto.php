
<?php

/*foreach ($lista1 as $item1) {
    foreach ($lista2 as $item2) {
        if ($item2 == "ERRO_FATAL") {
            goto erro; // Salta direto para o rótulo 'erro'
        }
    }
}

// O código continua aqui normalmente se não houver erro
echo "Processamento concluído com sucesso!";

erro:
echo "Ocorreu um problema e o processamento foi interrompido.";*/
$i = 0;

loop:
echo "Contagem: $i \n";
$i++;

if ($i < 5) {
    goto loop;
}
