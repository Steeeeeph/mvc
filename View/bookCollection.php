<?php 
require 'includes/header.php';
require './Model/Books.php';

$books = new Books($_POST['search']);
?>
<!-- this is the view, try to put only simple if's and loops here.
Anything complex should be calculated in the model -->
<fieldset>
    <h1>Your book collection</h1>
    <form action="" method="get">
        <label for="search">Add a book to your collection</label>
        <input type="text" name="search" id="search" placeholder="ISBN, book title, author...">
        <input type="submit" name="submit" value="Browse">
    </form>
</fieldset>
<div class="container">
    <?php
        var_dump($books)
    ?>
</div>
<?php require 'includes/footer.php'?>