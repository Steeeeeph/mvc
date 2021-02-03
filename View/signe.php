<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://use.fontawesome.com/f92a08f756.js"></script>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,900;1,200;1,900&display=swap"
        rel="stylesheet">
    <title>Becode - Boiler plate MVC</title>
</head>

<body>

    <!-- Navigation -->
    <?php include './includes/nav.php'; ?>
    <!-- End of Navigation -->


    <header>
        <h1>Welcome to my site</h1>
        <span class="glyphicon glyphicon-user"></span>

    </header>
    <form method="post">
        <h2>Register Form</h2>
        <div class="input-container">
            <i class="fa fa-user icon"></i>
            <input class="input-field" name="user" type="text" placeholder="Username"
                value="<?php if(isset ($_POST['submit'])){echo  htmlspecialchars($values[0]);}?>">
            <span class="error">* <?php echo $userErr?></span>
        </div>

        <div class="input-container">
            <i class="fa fa-envelope icon"></i>
            <input class="input-field" type="text" placeholder="Email" name="email"
                value="<?php if(isset ($_POST['submit'])){echo  htmlspecialchars($values[1]);}?>">
            <span class="error">* <?php echo $emailErr?></span>
        </div>

        <div class="input-container">
            <i class="fa fa-key icon"></i>
            <input class="input-field" type="password" placeholder="Password" name="password"
                value="<?php if(isset ($_POST['submit'])){echo  htmlspecialchars($values[2]);}?>">
            <span class="error">* <?php echo $passwordErr?></span>
        </div>
        <div class="input-container">
            <i class="fa fa-phone icon"></i>
            <input class="input-field" type="text" placeholder="Phone Number" name="phone"
                value="<?php if(isset ($_POST['submit'])){echo  htmlspecialchars($values[3]);}?>">
            <span class="error">* <?php echo $phoneErr?></span>
        </div>
        <div class="input-container">
            <i class="fa fa-home icon"></i>
            <input class="input-field" type="text" placeholder="City" name="city"
                value="<?php if(isset ($_POST['submit'])){echo  htmlspecialchars($values[4]);}?>">
            <span class="error">* <?php echo $cityErr?></span>
        </div>
        <button type="submit" name="submit" class="btn">Register</button>
    </form>
    <footer>
        &copy; BeCode <?php echo date('Y')?>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

</body>

</html>