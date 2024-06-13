<?php
require_once 'db-connect.php';
require_once 'functions.php';

$section = isset($_GET['section']) ? $_GET['section'] : 'fiction';
$books = getBooksBySection($section);

if (isset($_GET['sort']) && $_GET['sort'] == 'title') {
    $books = sortBooksByTitle($section);
}
?>

<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Книжковий розділ</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1 class="logo"><a href="./index.php">МояКнига</a></h1>
        <h2>Книги у розділі: <span>художня література</span></h2>
    </header>

    <main>
        <div class="sort-options">
            <a href="?section=<?php echo htmlspecialchars($section); ?>&sort=title">Сортувати за назвою</a>
            
            <a href="?section=<?php echo htmlspecialchars($section); ?>&sort=author">Сортувати за автором</a>

            <form action="fiction.php" method="GET">
                <input type="text" name="search" placeholder="Пошук...">
                <input type="hidden" name="section" value="<?php echo htmlspecialchars($section); ?>">
                <button type="submit">Пошук</button>
            </form>

            <?php 
            $search = isset($_GET['search']) ? $_GET['search'] : '';

            if (!empty($search)) {
                $books = searchBooks($section, $search);
            }
            ?>
        </div>
        
        <div class="books-list">
            <?php foreach ($books as $book): ?>
                <div class="book-item">
                    <img src="<?php echo htmlspecialchars($book['cover']); ?>" alt="<?php echo htmlspecialchars($book['title']); ?>">
                    <h2><?php echo htmlspecialchars($book['title']); ?></h2>
                    <p><?php echo htmlspecialchars($book['author']); ?> (<?php echo htmlspecialchars($book['year']); ?>)</p>
                    <p><?php echo htmlspecialchars($book['genre']); ?></p>
                    <p><?php echo htmlspecialchars($book['description']); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </main>
</body>
</html>
