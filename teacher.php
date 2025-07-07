<?php
include 'conn.php'; // your DB connection
include 'navbar.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Teacher Detail</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
  <h2 class="text-center mb-4">Teacher Details</h2>
  <table class="table table-bordered table-striped">
    <thead class="table-dark">
      <tr>
        <th>Name</th>
        <th>Qualification</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Subjects</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $sql = "SELECT * FROM teacher_detail";
      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          $subjects = [];

        //   if ($row['subject_english']) $subjects[] = 'English';
        //   if ($row['subject_urdu']) $subjects[] = 'Urdu';
        //   if ($row['subject_math']) $subjects[] = 'Math';
        //   if ($row['subject_science']) $subjects[] = 'Science';
        //   if ($row['subject_islamiyat']) $subjects[] = 'Islamiyat';
        //   if ($row['subject_computer']) $subjects[] = 'Computer';
        //   if ($row['subject_history']) $subjects[] = 'History';

          echo "<tr>
            <td>{$row['name']}</td>
            <td>{$row['qualification']}</td>
            <td>{$row['phone']}</td>
            <td>{$row['email']}</td>
            <td>{$row['subjects']}</td>
          </tr>";
        }
      } else {
        echo "<tr><td colspan='5' class='text-center'>No data found</td></tr>";
      }
      ?>
    </tbody>
  </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
