<?php

for ($i = 0; $i < 10; $i++) {
    echo $i . "\n";
    if ($i == 3) {
        break;
    } else {
        continue;
    }
}
