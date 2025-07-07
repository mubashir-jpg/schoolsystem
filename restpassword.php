<?php
include 'conn.php';
include 'navbar.php';

$otpSent = false;
$otpError = "";
$updateMessage = "";
$email = "";
$otpGenerated = "";

// Step 1: Handle OTP request
if (isset($_POST['request_otp'])) {
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $checkUser = "SELECT * FROM login WHERE email='$email' AND phone='$phone'";
    $result = mysqli_query($conn, $checkUser);

    if (mysqli_num_rows($result) > 0) {
        $otpGenerated = rand(100000, 999999);
        $otpSent = true;
    } else {
        $otpError = "❌ No user found with this email and phone.";
    }
}

// Step 2: Handle password reset
if (isset($_POST['reset_password'])) {
    $email = $_POST['email'];
    $otpGenerated = $_POST['otp_generated'];
    $enteredOtp = $_POST['otp'];
    $newPassword = $_POST['new_password'];

    if ($otpGenerated == $enteredOtp) {
        $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
        $updateQuery = "UPDATE login SET password='$hashedPassword' WHERE email='$email'";
        $updateResult = mysqli_query($conn, $updateQuery);

        if ($updateResult) {
            // Redirect to login
            header("Location: login.php?reset=success");
            exit();
        } else {
            $updateMessage = "❌ Failed to update password.";
        }
    } else {
        $updateMessage = "❌ Invalid OTP!";
    }
}
?>

<!doctype html>
<html lang="en">
<head>
  <title>Reset Password</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .box {
        max-width: 400px;
        margin: 40px auto;
        padding: 20px;
        background: #f8f9fa;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
  </style>
</head>
<body>

<div class="box">
  <h4 class="text-center mb-3">🔐 Reset Password</h4>

  <!-- Step 1: Email + Phone -->
  <?php if (!$otpSent && !$updateMessage): ?>
    <form method="POST">
      <label>Email</label>
      <input type="email" name="email" class="form-control mb-2" required>

      <label>Phone</label>
      <input type="text" name="phone" class="form-control mb-2" required>

      <button type="submit" name="request_otp" class="btn btn-primary w-100">Send OTP</button>
    </form>

    <?php if ($otpError): ?>
      <div class="alert alert-danger mt-2"><?php echo $otpError; ?></div>
    <?php endif; ?>
  <?php endif; ?>

  <!-- Step 2: OTP + New Password -->
  <?php if ($otpSent): ?>
    <div class="alert alert-success mt-3">
      Your OTP (for demo): <strong><?php echo $otpGenerated; ?></strong>
    </div>
    <form method="POST">
      <input type="hidden" name="email" value="<?php echo $email; ?>">
      <input type="hidden" name="otp_generated" value="<?php echo $otpGenerated; ?>">

      <label>Enter OTP</label>
      <input type="text" name="otp" class="form-control mb-2" required>

      <label>New Password</label>
      <input type="password" name="new_password" class="form-control mb-2" required>

      <button type="submit" name="reset_password" class="btn btn-success w-100">Reset Password</button>
    </form>
  <?php endif; ?>

  <!-- Final message -->
  <?php if ($updateMessage): ?>
    <div class="alert alert-info mt-3"><?php echo $updateMessage; ?></div>
  <?php endif; ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
