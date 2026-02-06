<?php

$express = "standard";

$prazo_sob_consulta = match ($express) {
    "express" => "2 dias",
    "standard" => "5 dias",
    "econimic" => "10 dias",
    default => "Outro dia",
};

$status_pagamento = 1;

$status = match ($status_pagamento) {
    1 => "pagamento confirmado",
    2, 3 => "em processo",
    4 => "enviado",
    5 => "entregue",
    default => "status desconhecido",
};


echo "O prazo da entrega será: $prazo_sob_consulta" . "\n";
echo "O status do pagamento é: $status";
