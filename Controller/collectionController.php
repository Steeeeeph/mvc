<?php

require_once 'setup.php';

// TODO api: $books = new Books($_POST['search']);


if (isset($_POST['submit'])) {
    $isbn = (int)$_POST['isbn'];
    $title = $_POST['title'];
    $author = $_POST['author'];
    $genre = $_POST['genre'];
    $language = $_POST['language'];
    $pages = (int) $_POST['pages'];
    $published = (int) $_POST['published'];
    
    $books->createBook($isbn, $title, $author, $genre, $language, $pages, $published);
}

require '../View/collection.php';