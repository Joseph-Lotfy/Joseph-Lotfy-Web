<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Abanoub Adel Gerges -->
    <link rel="stylesheet" href="css/lec9.css">
    <link rel="icon" type="image/jpg" href="css/Images/Abanoub.jpg">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LEC9</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
</head>
<body>
    <h1 class="heading">LEC9</h1>
    <hr>
    <div class="container">
        <h1>My first PHP page</h1>
        <?php
            echo "Hello World!";
        ?>
    </div>
    <hr>
    <div class="container">
        <?php
            ECHO "Hello World!<br>";
            echo "Hello World!<br>";
            EcHo "Hello World!<br>";
        ?>
    </div>
    <hr>
    <div class="container">
        <?php $color = "red";
            echo "My car is " . $color . "<br>";
            echo "My house is " . $COLOR . "<br>";
            echo "My boat is " . $coLOR . "<br>";
        ?>
    </div>
    <hr>
    <div class="container">
        <?php
            $txt = "second year comm.";
            echo "I love $txt!";
            echo "Hello";
            // same as:
            echo("Hello");
            // is the same output of:
            $txt = "second year comm.";
            echo "I love " . $txt . "!";
        ?>
    </div>
    <hr>
    <div class="container">
        <?php
            $txt = "second year comm.";
            $x = 5;
            $y = 4;
            echo $x + $y;
            echo "I love " . $txt . "!";
            echo "I love $txt!";
        ?>
    </div>
    <hr>
    <div class="container">
        <pre>
            <?php
                var_dump(5);
                var_dump("Ahmed");
                var_dump(3.14);
                var_dump(true);
                var_dump([2, 3, 56]);
                var_dump(NULL);
            ?>
        </pre>
    </div>
    <hr>
    <div class="container">
        <?php
            $x = $y = $z = "Fruit";
            echo $x. $y. $z;
        ?>
    </div>
    <hr>
    <div class="container">
        <?php
            $x = 5; // global scope
            function myTest() {
            // using x inside this function will generate an error
            echo "<p>Variable x inside function is: $x</p>";
            }
            myTest();
            echo "<p>Variable x outside function is: $x</p>";
        ?>
    </div>
    <hr>
    <div class="container">
        <?php
            $x = 5;
            $y = 10;
            function myTest2() {
            global $x, $y;
            $y = $x + $y;
            }
            myTest2(); // run function
            echo $y; // output the new value for variable $y
        ?>
    </div>
    <hr>
    <div class="container">
        <?php
            $t = date("H");
            echo "<p>The hour (of the server) is " . $t;
            echo ", and will give the following message:</p>";
            if ($t < "10") {
                echo "Have a good morning!";
            } elseif ($t < "20") {
                echo "Have a good day!";
            } else {
                echo "Have a good night!";
            }
        ?>
    </div>
    <hr>
    <div class="container"></div>
    <hr>
    <div class="container"></div>
    <hr>
    <div class="container"></div>
    <hr>
    <div class="container"></div>
    <hr>
    <script src="lec9.js"></script>
</body>
</html>