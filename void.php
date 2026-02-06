<?php

declare(strict_types=1);
/*Essa função retorna a sua funcionalidade,mas sem valor apenas o que foi registrado,portanto a utilização do void na aplicação em função */
function registradar(string $registro): void
{
    $data = date("Y-m-d H:i:s");
    echo "Registro: [$data] $registro";
}
registradar("Registro de usuario ");
