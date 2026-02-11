<?php
$name = "";
$age = "";
$votingMessage = "";

if (isset($_POST['checkVoting'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];

    if ($age >= 18) {
        $votingMessage = "$name is eligible for voting.";
    } else {
        $votingMessage = "$name is not eligible for voting.";
    }
}

$currentMonth = date("F");

switch ($currentMonth) {
    case "August":
        $monthMessage = "It's August, so it's still holiday.";
        break;
    default:
        $monthMessage = "Not August, this is $currentMonth so I don't have any holidays.";
}

$tableOutput = "";
if (isset($_POST['generateTable'])) {
    $num = $_POST['number'];

    for ($i = 1; $i <= 10; $i++) {
        $tableOutput .= "$num x $i = " . ($num * $i) . "<br>";
    }
}

$whileOutput = "";
if (isset($_POST['printNumbers'])) {
    $n = $_POST['limit'];
    $i = 1;

    while ($i <= $n) {
        $whileOutput .= $i . " ";
        $i++;
    }
}

$myarray = array("HTML", "CSS", "PHP", "JavaScript");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Exercise 4</title>
</head>

<body>

<nav>
    <a href="index.php">Home</a> |
    <a href="ex1.php">Exercise 1</a> |
    <a href="ex2.php">Exercise 2</a> |
    <a href="ex3.php">Exercise 3</a> |
    <a href="ex4.php">Exercise 4</a>
</nav>

<h2>Exercise 4: Control Flow and Loops</h2>

<div>
    <h4>Voting Eligibility (If-Else)</h4>

    <form method="post">
        <input type="text" name="name" placeholder="Enter your name" required>
        <input type="number" name="age" placeholder="Enter your age" required>
        <button type="submit" name="checkVoting">Check</button>
    </form>

    <?php
    if (!empty($votingMessage)) {
        echo "<h5>$votingMessage</h5>";
    }
    ?>
</div>

<div>
    <h4>Switch Case (Current Month)</h4>
    <?php echo "<p>$monthMessage</p>"; ?>
</div>

<div>
    <h4>Multiplication Table (For Loop)</h4>

    <form method="post">
        <input type="number" name="number" placeholder="Enter a number" required>
        <button type="submit" name="generateTable">Generate Table</button>
    </form>

    <div>
        <?php echo $tableOutput; ?>
    </div>
</div>

<div>
    <h4>Numbers from 1 to n (While Loop)</h4>

    <form method="post">
        <input type="number" name="limit" placeholder="Enter a number" required>
        <button type="submit" name="printNumbers">Print Numbers</button>
    </form>

    <div>
        <?php echo $whileOutput; ?>
    </div>
</div>

<div>
    <h4>Foreach Loop (Array Elements)</h4>

    <?php
    foreach ($myarray as $item) {
        echo $item . "<br>";
    }
    ?>
</div>

</body>
</html>

