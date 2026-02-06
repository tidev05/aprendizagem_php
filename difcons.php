<?php
define("MEU_APP_VERSAO", "2.0.1");

$constantes = get_defined_constants(true);

// O parâmetro 'true' organiza por categorias (user, Core, pcre, etc.)
print_r($constantes['user']); 
// Saída: Array ( [MEU_APP_VERSAO] => 2.0.1 )