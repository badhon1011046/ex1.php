<?php
// PHP Variables
$str1 = "Hello";
$str2 = "World";
$joinedString = $str1 . " " . $str2;
$stringLength = strlen($joinedString);

$num1 = 298;
$num2 = 234;
$num3 = 46;
$total = $num1 + $num2 + $num3;

$browser = $_SERVER['HTTP_USER_AGENT'];

$firstname = "";
$lastname = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = htmlspecialchars($_POST['firstname']); // sanitize input
    $lastname = htmlspecialchars($_POST['lastname']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Exercise 3</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">MySite</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="ex1.php">Exercise 1</a></li>
        <li class="nav-item"><a class="nav-link" href="ex2.php">Exercise 2</a></li>
        <li class="nav-item"><a class="nav-link active" href="ex3.php">Exercise 3</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">

  <!-- User Form -->
  <div class="card p-4 mb-4">
    <h4>User Form</h4>
    <form method="post" action="">
      <div class="mb-3">
        <label class="form-label">Firstname</label>
        <input type="text" class="form-control" name="firstname">
      </div>
      <div class="mb-3">
        <label class="form-label">Lastname</label>
        <input type="text" class="form-control" name="lastname">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <?php
    if (!empty($firstname) && !empty($lastname)) {
        echo "<div class='alert alert-success mt-3'>Hello $firstname $lastname, You are welcome to my site.</div>";
    }
    ?>
  </div>

  <!-- Sample Table -->
  <h4>Sample Table</h4>
  <table class="table table-bordered table-striped mb-4">
    <thead class="table-dark">
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Course</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>SHAHAREAR</td>
        <td>PHP</td>
      </tr>
      <tr>
        <td>2</td>
        <td>BADHON</td>
        <td>Web Development</td>
      </tr>
    </tbody>
  </table>

  <!-- String Variables -->
  <h4>String Variables</h4>
  <p>Joined string: <strong><?php echo $joinedString; ?></strong></p>
  <p>Length of string: <strong><?php echo $stringLength; ?></strong></p>

  <!-- Number Addition -->
  <h4>Number Addition</h4>
  <p>The sum of 298, 234 and 46 is: <strong><?php echo number_format($total); ?></strong></p>

  <!-- Browser Detection -->
  <h4>Browser Detection</h4>
  <p>You are using: <strong><?php echo $browser; ?></strong></p>

</div>

<!-- Footer -->
<footer class="text-center mt-4 py-3 bg-light">
  <?php
  $file = basename($_SERVER['PHP_SELF']);
  $lastModified = filemtime($file);
  echo "Last modified: " . date("F d Y H:i:s", $lastModified);
  ?>
</footer>

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
