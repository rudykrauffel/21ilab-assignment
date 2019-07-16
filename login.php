<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>21iLab Assignment</title>
    <meta name="author" content="Rudy Krauffel">
    <meta name="description" content="Assignment for a frontend development internship">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <h2>Frontend Development Internship : Assignment</h2>
    <h3>Rudy Krauffel, France</h3>
    

    <form action="post.php" method="post">
        <p>
            <label for="mail">Your email:</label>
            <input type="email" id="mail" name="mail" required>        
        </p>
        <p>
            <label for="pass">Your password:</label>
            <input type="password" id="pass" name="pass" required>        
        </p>

        <input type="submit" value="Login" class="btn-class"/>  

    </form>

    <?php 
        if (isset($_GET['login']) && 'false' === $_GET['login']) {
            echo '<p><br>Login failed! Please try again.</p>';
        }
    ?>

</body>

</html>