<?php

class Books
{
    private $databaseManager;

    public function __construct($databaseManager)
    {
        $this->databaseManager = $databaseManager;
    }

    public function createBook($isbn, $title, $author, $genre, $language, $pages, $published)
    {
        $bookData =[
                    'isbn' => $isbn,
                    'title' => $title,
                    'author' => $author,
                    'genre' => $genre,
                    'language' => $language,
                    'pages' => $pages,
                    'published' => $published,
                ];
        $sql= "INSERT INTO books (isbn, title, author, genre, language, pages, published)
                VALUES (:isbn, :title, :author, :genre, :language, :pages, :published);
                INSERT INTO book_collection (book_isbn)
                VALUES (:isbn)"; //TODO insert user id as well
        $this->databaseManager->database->prepare($sql)->execute($bookData);

    }

    public function getCollection()
    {
        $sql = "SELECT title, author, ";
    }

}

