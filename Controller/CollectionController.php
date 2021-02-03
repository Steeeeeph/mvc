<?php

class CollectionController
{
    private $databaseManager;



    // This class needs a database connection to function
    public function __construct(DatabaseManager $databaseManager)
    {
        $this->databaseManager = $databaseManager;
    }
    // TODO api: $books = new Books($_POST['search']);
    public function render(array $_SESSION, array $_POST)
    {
        if (isset($_POST['submit'])) {
            //TODO validate based on patterns?
            if (!empty($_POST['isbn']) && !empty($_POST['author']) && !empty($_POST['genre']) && !empty($_POST['language']) && !empty($_POST['pages']) && !empty($_POST['published'])) {
                $isbn = (int)$_POST['isbn'];
                $title = $_POST['title'];
                $author = $_POST['author'];
                $genre = $_POST['genre'];
                $language = $_POST['language'];
                $pages = (int)$_POST['pages'];
                $published = (int)$_POST['published'];
        
                $books->createBook($id, $isbn, $title, $author, $genre, $language, $pages, $published);
        
            } else {
                return $php_errormsg;
        
            }
        
        }
        require '../View/collection.php';

    }
    
}

