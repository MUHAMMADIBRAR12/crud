<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Student Database</title>
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
<div class="row justify-content-center">
<div class="col-lg-6">
<h2 class="text-center mb-4">Student Form</h2>
<form action="" method="POST">
<div class="mb-3">
<label for="name" class="form-label">Name:</label>
<input type="text" class="form-control" id="name" name="name" required>
</div>
<div class="mb-3">
<label for="age" class="form-label">Age:</label>
<input type="text" class="form-control" id="age" name="age" required>
</div>
<div class="mb-3">
<label for="email" class="form-label">Email:</label>
<input type="email" class="form-control" id="email" name="email" required>
</div>
<button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</div>

<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
include "connect.php";
if (isset($_POST['submit'])) {
$name = $_POST['name'];
$age = $_POST['age'];
$email = $_POST['email'];
$sql = "INSERT INTO `students`(`name`, `age`, `email`) VALUES ('$name','$age','$email')";
$result = $conn->query($sql);
if ($result == TRUE) {
echo "New record created successfully.";
header('Location: index.php');
}else{
echo "Error:". $sql . "<br>". $conn->error;
}
$conn->close();
}
?>

