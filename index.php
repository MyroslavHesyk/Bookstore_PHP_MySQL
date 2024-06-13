<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Книжковий сайт</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h2>Ласкаво просимо на книжковий сайт</h2>
        <h1 class="logo">МояКнига</h1>
        <nav>
            <ul>
                <li><a href="fiction.php?section=fiction">Художня література</a></li>
                <li><a href="non-fiction.php?section=non-fiction">Документальна література</a></li>
                <li><a href="science.php?section=science">Наукова література</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h2>Виберіть розділ для перегляду книг</h2>

        <div class="section-cards">
            <a class="section-card" href="fiction.php?section=fiction">
                <img src="./images/1.jpg" alt="Художня література">
                <h3>Художня література</h3>
            </a>
            <a class="section-card" href="non-fiction.php?section=non-fiction">
                <img src="./images/1.jpg" alt="Документальна література">
                <h3>Документальна література</h3>
            </a>
            <a class="section-card" href="science.php?section=science">
                <img src="./images/1.jpg" alt="Наукова література">
                <h3>Наукова література</h3>
            </a>
        </div>
    </main>
</body>
</html>
