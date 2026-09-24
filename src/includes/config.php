<?php
// Basisconfiguratie van de site
define('SITE_NAME', 'Dummy PHP-project');
define('BASE_URL', 'http://localhost:8000');
define('DEBUG_MODE', true);

// Nep-databaseconfiguratie (niet echt verbonden in dit dummyproject)
$dbConfig = [
    'host' => 'localhost',
    'name' => 'dummy_db',
    'user' => 'root',
    'pass' => '',
];

// Eenvoudige navigatielinks die in alle views worden gebruikt
$navLinks = [
    'Home' => '/index.php',
];
