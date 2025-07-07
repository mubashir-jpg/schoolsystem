<?php
// Include your DB connection and navbar
include 'conn.php';
include 'navbar.php';

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $fname = $_POST['fname'];
    $class = $_POST['class'];
    $recept_no = $_POST['recept_no'];
    $cnic = $_POST['cnic'];

    $sql = "INSERT INTO fees(name, fname, class, recept_no, cnic)
            VALUES ('$name', '$fname', '$class', '$recept_no', '$cnic')";

    $result = mysqli_query($conn, $sql);

    if (!$result) {
        die("Insertion failed: " . mysqli_error($conn));
    } else {
        echo "<div class='alert alert-success text-center'>Data inserted successfully!</div>";
    }
}
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Fees Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .contnier {
        margin: 30px auto;
        padding: 20px;
        width: 400px;
        background-color: #f7f7f7;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    input {
        margin-bottom: 15px;
    }

    h1 {
        text-align: center;
    }
  </style>
</head>
<body>

<div class="contnier">
    <h1>FEES FORM</h1>
    <form method="POST" action="">
        <label>Name</label>
        <input type="text" name="name" class="form-control" required>

        <label>F/Name</label>
        <input type="text" name="fname" class="form-control" required>

        <label>Class</label>
        <input type="text" name="class" class="form-control" required>

        <!-- <label>Recept No</label>
        <input type="text" name="recept_no" class="form-control" required> -->

        <label>Father NIC</label>
        <input type="text" name="cnic" class="form-control" required>

        <button type="submit" class="btn btn-dark mt-3 w-100">Submit</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<?php
include 'navbar.php'
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">MyApp</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="newstudent.php">Student Fee</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="teacher.php">Teacher Detail</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="dashboard.php">Dashboard</a>
        </li>

        <?php if (isset($_SESSION['user_email'])): ?>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
          </li>
        <?php else: ?>
          <li class="nav-item">
            <a class="nav-link" href="Registration.php">Signup</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
          </li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>
<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<?php
include 'navbar.php'
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">MyApp</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="newstudent.php">Student Fee</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="teacher.php">Teacher Detail</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="dashboard.php">Dashboard</a>
        </li>

        <?php if (isset($_SESSION['user_email'])): ?>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
          </li>
        <?php else: ?>
          <li class="nav-item">
            <a class="nav-link" href="Registration.php">Signup</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
          </li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>
