<?php require 'includes/header.php';?>
<!-- this is the view, try to put only simple if's and loops here.
Anything complex should be calculated in the model -->
<fieldset>
    <h2>Your book collection</h2>
    <form action="" method="post">
        <label for="submit">Add a book to your collection</label> <br>
        <div class="input-group">
            <!-- <label for="search">Add a book to your collection</label> -->
            <!-- <input type="text" name="search" id="search" placeholder="ISBN, book title, author..."> //TODO searching from API -->
            <input type="number" name="isbn" id="isbn" min=9000000000 max=9000000000000 placeholder="ISBN number" required> 
            <input type="text" name="title" id="title" placeholder="Title" required> 
            <input type="text" name="author" id="author" placeholder="Author" required> 
            <select name="genre" id="genre">
                <!-- <?php foreach ($genres as $genre): ?>
                    <option value="<?=$books->genre?>"><?=$books->genre?></option>
                <?php endforeach ?> -->
                <option value="" disabled selected hidden>Genre</option>
                <option value="cooking">Cooking</option>
                <option value="creative">Creative</option>
                <option value="kids">Kids</option>
                <option value="programming">Programming</option>
            </select>
            <select name="language" id="language">
                <!-- <?php foreach ($genres as $genre): ?>
                    <option value="<?=$books->genre?>"><?=$books->genre?></option>
                <?php endforeach ?> -->
                <option value="" disabled selected hidden>Language</option>
                <option value="english">English</option>
                <option value="dutch">Dutch</option>
            </select>
            <input type="number" name="pages" id="pages" placeholder="Number of pages" min=5 max=3000 required> 
            <input type="number" name="published" id="published" placeholder="Published in the year" length=4 min=1900 max=<?= date('Y')?> required> 
            <input type="submit" name="submit" class="btn btn-success" value="Add to collection" style="width:auto">
        </div>

    </form>
</fieldset>
<div class="container-fluid">
<!-- //TODO foreach card data -->
    <div class="card" style="width:300px">
        <img src="../View/includes/default_book_cover.jpeg" alt="" class="card-img-top"> <!--//TODO ternary operator for book image-->
        <div class="card-body">
            <h4 class="card-title">Title something something</h4>
            <h5 class="card-title">A. Uthor</h5>
            <p class="card-text">Available</p>
            <a href="#" class="btn btn-primary">Set unavailable</a> <!--//TODO ternary for available-->
            <a href="#" class="btn btn-danger">Delete from collection</a>
        </div>
    </div>
</div>
<!-- //TODO Getting data from API -->
<?php
       // var_dump($books)
    ?>
<?php require 'includes/footer.php'?>