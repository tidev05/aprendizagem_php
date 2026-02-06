<?php

declare(ticks=1);

// A função a ser chamada em cada evento tick
function tick_handler()
{
    echo "tick_handler() chamada.\n";
}

register_tick_function('tick_handler'); // Causa um evento tick

$a = 1; // Causa um evento tick

if ($a > 0) {
    $a += 5; // Causa um evento tick
    print $a; // Causa um evento tick
}
