<?php
include 'connect.php';

$sql = "SELECT * FROM `crud`";
$result = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD OPERATION</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container my-5">
  <a href="user.php" class="btn btn-primary mb-3">Add User</a>

  <table class="table table-bordered">
    <thead class="thead-dark">
      <tr>
        <th>Sl no</th>
        <th>Name</th>
        <th>Email</th>
        <th>Mobile</th>
        <th>Password</th>
        <th>Operations</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $sl = 1;
      while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr>
                <td>' . $sl++ . '</td>
                <td>' . $row['name'] . '</td>
                <td>' . $row['email'] . '</td>
                <td>' . $row['mobile'] . '</td>
                <td>' . $row['password'] . '</td>
                <td>
                  <a href="update.php?updateid=' . $row['id'] . '" class="btn btn-sm btn-primary">Update</a>
                  <a href="delete.php?deleteid=' . $row['id'] . '" class="btn btn-sm btn-danger ml-2">Delete</a>
                </td>
              </tr>';
      }
      ?>
    </tbody>
  </table>
</div>

</body>
</html>
