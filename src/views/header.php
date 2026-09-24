<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title><?= SITE_NAME ?></title>
</head>
<body>
    <header>
        <h1><?= SITE_NAME ?></h1>
        <nav>
            <ul>
                <?php foreach ($navLinks as $label => $url): ?>
                    <li><a href="<?= $url ?>"><?= $label ?></a></li>
                <?php endforeach; ?>
            </ul>
        </nav>
    </header>
    <main>
