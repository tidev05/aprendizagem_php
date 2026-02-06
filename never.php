<?php
/* o uso do never é quando a funcao retorna um erro */
function mensagem(string $nome): never
{
    echo "Seja bem-vindo ao curso de PHP {$nome}\n";
    exit($nome === "Never" ? 1 : 0);
    throw new Exception("Erro");
}

mensagem("Never");
