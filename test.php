

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">



<p>log in</p>
  <form action="action_page.php" method="POST">
    <div class="mb-3 mt-3">
      <label for="email">Email:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="mb-3">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
    </div>
    <button type="submit" class="btn btn-primary" name="btn">Submit</button>
  </form>


<p>reg</p>
  <form action="action_page.php" method="POST">
    <div class="mb-3 mt-3">
      <label for="email">user name:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter email" name="e_email">
    </div>
    <div class="mb-3">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="e_pswd">
    </div>
    <button type="submit" class="btn btn-primary" name="e_btn">Submit</button>
  </form>



</div>

</body>
</html>
