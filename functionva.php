
<?php
class Foo
{
    static $variable = 'propriedade estática';
    static function Variable()
    {
        echo 'Método chamado';
    }
}

echo Foo::$variable; // Isto imprime 'propriedade estática'. Ele busca $variable no escopo da classe.
$variable = "Variable";
Foo::$variable();  // Isto chama $foo->Variable(), lendo a $variable no escopo da chamada.

?>
