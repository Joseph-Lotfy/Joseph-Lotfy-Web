<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Abanoub Adel Gerges -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEC10</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link rel="stylesheet" href="css/sec10.css">
    <link rel="icon" type="image/jpg" href="css/Images/Abanoub.jpg">
</head>
<body>
    <h1 class="heading">SEC10</h1>
    <hr>
    <div class="container">
        <h1>List of your favorite fruits</h1>
        <?php
        echo "<ul class=\"fruit\">\n";
            $fruits = array("Apples", "Bananas", "Cherries", "Dates");
            foreach ($fruits as $fruit) {
                echo "<li>$fruit</li>\n";
            }
            echo "</ul>\n";
        ?>
    </div>
    <hr>
    <div class="container">
        <h1>Families and their information</h1>
        <?php
            function displayFamilyInformation($name, $year) {
                echo "<div class=\"family\">";
                echo "<h2>Family name is $name.</h2>";
                echo "<p>This family was born in $year.</p>";
                echo "</div>";
            }
            $families = array(
                "First family" => 1920,
                "Second family" => 1937,
                "Third family" => 1962,
            );
            foreach ($families as $name => $year) {
                displayFamilyInformation($name, $year);
            }
        ?>
    </div>
    <hr>
    <div class="container">
        <h1>Students and their Grades</h1>
        <?php
            function displayStudentGrade($name, $score) {
                echo "<div class=\"grade\">";
                echo "<h2>Student Name: $name</h2>";
                switch ($score) {
                    case ($score >= 90):
                        echo "<p>Grade: A</p>";
                        break;
                    case ($score >= 80):
                        echo "<p>Grade: B</p>";
                        break;
                    case ($score >= 70):
                        echo "<p>Grade: C</p>";
                        break;
                    case ($score >= 60):
                        echo "<p>Grade: D</p>";
                        break;
                    default:
                        echo "<p>Grade: F</p>";
                        break;
                }
                echo "</div>";
            }
            $students = array(
                "Alice" => 95,
                "Bob" => 82,
                "Charlie" => 68,
                "Diana" => 73,
                "Eve" => 58
            );
            foreach ($students as $name => $score) {
                displayStudentGrade($name, $score);
            }
        ?>
    </div>
    <hr>
    <div class="container">
        <h1>Factorial of Numbers</h1>
        <?php
            function calculateFactorial($number) {
                $factorial = 1;
                for ($i = 1; $i <= $number; $i++) {
                    $factorial *= $i;
                }
                return $factorial;
            }
            $numbers = array(1, 2, 3, 4, 5);
            foreach ($numbers as $number) {
                $factorial = calculateFactorial($number);
                echo "<div class=\"fac\">";
                echo "<h1>Factorial( $number ) = $factorial</h1>";
                echo "</div>\n";
            }
        ?>
    </div>
    <hr>
</body>
</html>