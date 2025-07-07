<?php
include 'navbar.php';
include 'conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $fname = $_POST['fname'];
    $class = $_POST['class'];
    $class_no = $_POST['class_no'];
    $cnic = $_POST['cnic'];

    $sql = "INSERT INTO `student`(`name`, `fname`, `class`, `class_no`, `cnic`)
            VALUES ('$name', '$fname', '$class', '$class_no', '$cnic')";

    $result = mysqli_query($conn, $sql);

    if (!$result) {
        die("Insertion failed: " . mysqli_error($conn));
    } else {
        echo "<div class='alert alert-success text-center'>Form submitted successfully!</div>";
    }
}
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Admission Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .contnier {
      display: block;
      margin: 30px auto;
      width: 400px;
      background-color: snow;
      padding: 20px;
      border-radius: 10px;
    }
    input {
      display: block;
      margin: 10px auto;
      padding: 4px;
      border-radius: 4px;
      border: 2px solid black;
      width: 300px;
    }
    .btn {
      display: block;
      margin: 10px auto;
      width: 100px;
      cursor: pointer;
      background-color: rgb(74, 97, 89);
      font-size: large;
      border-radius: 4px;
    }
    .btn:hover {
      color: white;
      background-color: gray;
    }
    h1 {
      text-align: center;
    }
  </style>
</head>
<body>

<div class="contnier">
  <h1>Admission Form</h1>
  <form method="POST" action="">
    <label for="">Name</label>
    <input type="text" name="name" placeholder="Enter name" required>

    <label for="">Father's Name</label>
    <input type="text" name="fname" placeholder="Enter father's name" required>

    <label for="">Class</label>
    <input type="text" name="class" placeholder="Enter class" required>

    <label for="">Class No</label>
    <input type="text" name="class_no" placeholder="Enter class no" required>

    <label for="">Father CNIC</label>
    <input type="text" name="cnic" placeholder="Enter CNIC" required>

    <button class="btn" type="submit">Submit</button>
  </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
