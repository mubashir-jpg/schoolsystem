<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>School Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f1f1f1;
    }

    .header-image {
      width: 100%;
      max-height: 300px;
      object-fit: cover;
      border-bottom: 4px solid #0d6efd;
    }

    .dashboard-title {
      text-align: center;
      margin: 30px 0;
      font-weight: bold;
    }

    .card {
      border: none;
      border-radius: 15px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      transition: transform 0.2s;
    }

    .card:hover {
      transform: translateY(-5px);
    }

    .card-img-top {
      height: 150px;
      object-fit: cover;
      border-top-left-radius: 15px;
      border-top-right-radius: 15px;
    }

    footer {
      background-color: #0d6efd;
      color: white;
      text-align: center;
      padding: 20px 0;
      margin-top: 40px;
    }
  </style>
</head>
<body>

<!-- Header Banner Image -->
<img src="https://images.unsplash.com/photo-1600721391091-03e2536edcd7?auto=format&fit=crop&w=1500&q=80" 
     class="header-image" alt="School Banner">

<div class="container">
  <h2 class="dashboard-title">School Dashboard</h2>
  <div class="row g-4">

    <!-- Students Card -->
    <div class="col-md-4">
      <div class="card">
        <img src="https://images.unsplash.com/photo-1588072432836-e10032774350?auto=format&fit=crop&w=800&q=90" class="card-img-top" alt="Students">
        <div class="card-body text-center">
          <h5 class="card-title">Students</h5>
          <p class="card-text">Manage student data, admissions, and attendance.</p>
          <a href="students.php" class="btn btn-primary">View Students</a>
        </div>
      </div>
    </div>

    <!-- Teachers Card -->
    <div class="col-md-4">
      <div class="card">
        <img src="https://www.pexels.com/photo/twin-girls-doing-online-learning-9037275/" class="card-img-top" alt="Teachers">
        <div class="card-body text-center">
          <h5 class="card-title">Teachers</h5>
          <p class="card-text">View and manage teacher profiles and subjects.</p>
          <a href="teacher.php" class="btn btn-primary">View Teachers</a>
        </div>
      </div>
    </div>

    <!-- Fees Card -->
    <div class="col-md-4">
      <div class="card">
        <img src="https://www.pexels.com/photo/adorable-feline-surrounded-by-colorful-letters-31723693/" class="card-img-top" alt="Fees">
        <div class="card-body text-center">
          <h5 class="card-title">Fees</h5>
          <p class="card-text">Submit and track student fee records securely.</p>
          <a href="studentfee.php" class="btn btn-primary">Manage Fees</a>
        </div>
      </div>
    </div>

  </div>
</div>

<!-- Footer -->
<footer>
  <p>&copy; 2025 School Management System. All rights reserved.</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
