<?php
setcookie('username', $_POST['username']);
$submitted = !empty($_POST);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Libary</title>

    <!-- style -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <div class="wrapper">
        <!-- Navigation -->
        <nav class="main-nav">
            <ul>
                <li>
                    <a href="../../index.html">Home</a>
                </li>
                <li>
                    <a href="../../about.html">About</a>
                </li>
                <li>
                    <a href="../../projects.html">Projects</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>
        </nav>
        <main role="main">
        <!-- /container -->
        <?php if ($submitted): ?>
            <p>Your login info is</p>
            <ul>
                <li><b>username</b>: <?php echo $_POST['username']; ?></li>
                <li><b>password</b>: <?php echo $_POST['password']; ?></li>
            </ul>
        <?php else: ?>
            <p>You did not submit anything.</p>
        <?php endif; ?>
        </main>

        <!-- Footer -->
        <footer>
            <p>Adam Rhys Heaton &copy; 2018</p>
        </footer>
    </div>
    <!-- Wrapper Ends -->

    <!-- JavaScript ================================================== -->

    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- JavaScript -->
    <script src="js/main.js"></script>
</body>

</html>