<?php
function getBooksBySection($section) {
    $query = sprintf("SELECT * FROM books WHERE section='%s'", mysql_real_escape_string($section));
    $result = mysql_query($query);
    $books = [];
    while ($row = mysql_fetch_assoc($result)) {
        $books[] = $row;
    }
    return $books;
}

/* function getAllBooks() {
    $result = mysql_query("SELECT * FROM books");
    $books = [];
    while ($row = mysql_fetch_assoc($result)) {
        $books[] = $row;
    }
    return $books;
} */

/* function getBookById($id) {
    $query = sprintf("SELECT * FROM books WHERE id='%d'", (int)$id);
    $result = mysql_query($query);
    return mysql_fetch_assoc($result);
}*/

function sortBooksByTitle($section) {
    $query = sprintf("SELECT * FROM books WHERE section='%s' ORDER BY title", mysql_real_escape_string($section));
    $result = mysql_query($query);
    $books = [];
    while ($row = mysql_fetch_assoc($result)) {
        $books[] = $row;
    }
    return $books;
}  



function sortBooksByAuthor($section) {
    $query = sprintf("SELECT * FROM books WHERE section='%s' ORDER BY author", mysql_real_escape_string($section));
    $result = mysql_query($query);
    $books = [];
    while ($row = mysql_fetch_assoc($result)) {
        $books[] = $row;
    }
    return $books;
}

function searchBooks($section, $keyword) {
    $query = sprintf("SELECT * FROM books WHERE section='%s' AND (title LIKE '%%%s%%' OR author LIKE '%%%s%%' OR description LIKE '%%%s%%')",
        mysql_real_escape_string($section),
        mysql_real_escape_string($keyword),
        mysql_real_escape_string($keyword),
        mysql_real_escape_string($keyword)
    );
    $result = mysql_query($query);
    $books = [];
    while ($row = mysql_fetch_assoc($result)) {
        $books[] = $row;
    }
    return $books;
}
?>
