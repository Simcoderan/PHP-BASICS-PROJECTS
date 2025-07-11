<?php
include 'connect.php';

if (isset($_POST['displaySend'])) {
    $table = '<table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Sl No</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Mobile</th>
          <th scope="col">Place</th>
        </tr>
      </thead><tbody>';

    $sql = "SELECT * FROM `crud modal`";
    $result = mysqli_query($con, $sql);

    while ($row = mysqli_fetch_assoc($result)) {
        $table .= '<tr>
            <td>' . $row['id'] . '</td>
            <td>' . $row['name'] . '</td>
            <td>' . $row['email'] . '</td>
            <td>' . $row['mobile'] . '</td>
            <td>' . $row['place'] . '</td>
        </tr>';
    }

    $table .= '</tbody></table>';
    echo $table;
}
?>
