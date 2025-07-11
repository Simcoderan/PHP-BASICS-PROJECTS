<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Bootstrap Modal CRUD</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
</head>
<body>

<!-- Modal -->
<div class="modal fade" id="completeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">New User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span>&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="completename">Name</label>
          <input type="text" class="form-control" id="completename" placeholder="Enter your name">
        </div>
        <div class="form-group">
          <label for="completeemail">Email</label>
          <input type="email" class="form-control" id="completeemail" placeholder="Enter your email">
        </div>
        <div class="form-group">
          <label for="completemobile">Mobile</label>
          <input type="text" class="form-control" id="completemobile" placeholder="Enter your mobile number">
        </div>
        <div class="form-group">
          <label for="completeplace">Place</label>
          <input type="text" class="form-control" id="completeplace" placeholder="Enter your place">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-danger" onclick="adduser()">Submit</button>
      </div>
    </div>
  </div>
</div>

<div class="container mt-5">
  <h2 class="text-center">PHP Bootstrap Modal CRUD</h2>
  <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#completeModal">Add New Users</button>
  <div id="displayDataTable" class="mt-4"></div>
</div>

<!-- Scripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"></script>

<script>
  // Display function
  function displayData() {
    var display = "true";
    $.ajax({
      url: 'display.php',
      type: 'POST',
      data: { displaySend: display },
      success: function(data) {
        $('#displayDataTable').html(data);
      }
    });
  }

  // Add user
  function adduser() {
    var nameAdd = $('#completename').val();
    var emailAdd = $('#completeemail').val();
    var mobileAdd = $('#completemobile').val();
    var placeAdd = $('#completeplace').val();

    $.ajax({
      url: 'insert.php',
      type: 'POST',
      data: {
        nameSend: nameAdd,
        emailSend: emailAdd,
        mobileSend: mobileAdd,
        placeSend: placeAdd
      },
      success: function(response) {
        $('#completeModal').modal('hide');
        displayData();
      }
    });
  }

  // Load table on page load
  $(document).ready(function() {
    displayData();
  });
</script>
</body>
</html>
