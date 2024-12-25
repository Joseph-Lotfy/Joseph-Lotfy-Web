<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Abanoub Adel Gerges -->
    <link rel="stylesheet" href="css/sec9.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEC9</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link rel="icon" type="image/jpg" href="css/Images/Abanoub.jpg">
    </head>
<body>
    <h1 class="heading">SEC9</h1>
    <hr>
    <div class="container">
        <h1>My first PHP page</h1>
        <?php
            echo "Hello World!";
        ?>
    </div>
    <hr>
    <div class="container">
        <h1>Testing</h1>

        <?php
            var_dump($_REQUEST);
            if (isset($_SERVER['REQUEST_METHOD'])) {
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name = htmlspecialchars($_POST['name']);
                $email = htmlspecialchars($_POST['email']);
                $message = htmlspecialchars($_POST['message']);

                echo "<h2>Submitted Information:</h2>";
                echo "Name: $name<br>";
                echo "Email: $email<br>";
                echo "Message: $message<br>";
            }
            } else {
                echo "Please enter a message";
            }
        ?>
    </div>
    <hr>
    <div class="container">
        <form method="post" action="action.php">
            Name: <input type="text" name="name"><br>
            Email: <input type="email" name="email"><br>
            Message: <textarea name="message"></textarea><br>
            <input type="submit" value="Submit">
        </form>

        <?php
            var_dump($_REQUEST);
            if (isset($_SERVER['REQUEST_METHOD'])) {
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name = htmlspecialchars($_POST['name']);
                $email = htmlspecialchars($_POST['email']);
                $message = htmlspecialchars($_POST['message']);

                echo "<h2>Submitted Information:</h2>";
                echo "Name: $name<br>";
                echo "Email: $email<br>";
                echo "Message: $message<br>";
            }
            } else {
                echo "Please enter a message";
            }
        ?>
    </div>
    <hr>
    <div class="container">
        <ul>
            <?php
                $names = ["Ahmed", "Ali", "Alamat", "Jason", "Taison", "Tahun"];
                $age = [10, 20, 30, 40, 50, 60];
                $len = count($names);

                for ( $i = 0; $i < $len; $i++ ) {
                    ?>
                        <li><?= "Student-".$i." = Name: ". $names[$i] . " , Age : ". $age[$i] ?></li>
                    <?php
                }
            ?>
        </ul>
    </div>
    <hr>
    <div class="container">
        <?php
            $IsLoggedIn = true; // Change this to false to test the other condition
            $UserName = "John";
            echo "<div style='text-align: center; margin-top: 30%;'>";
            if ($IsLoggedIn) {
                echo "Hello, $UserName";
            } else {
                echo "Hello Stranger";
            }
            echo "</div>";
        ?>
    </div>
    <hr>
    <div class="container">
        <?php
            function fib($i) {
                if ($i <= 1) return 1;
                return fib($i - 1) + fib($i - 2);
            }
            echo fib(5);
        ?>
    </div>
    <hr>
    <script>
        var x = 10;
        alert(x);
    </script>
</body>
</html>