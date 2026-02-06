<?php
if (function_exists('imap_open')) {
    echo "O sistema pode ler e-mails via IMAP.";
} else {
    echo "A função IMAP não está instalada neste servidor.";
}
