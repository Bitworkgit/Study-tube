<?php
    $comandos = [
        "composer install",
        "copy .env.example .env",
        "php artisan key:generate",
        "php artisan migrate",
        "npm install",
        "npm run dev"
    ];

    foreach($comandos as $comando)
        system($comando);
    echo "Instalação concluída";
?>