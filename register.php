<?php
$success = $_GET['success'] ?? null;
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<body>

<?php if (!is_null($success)): ?>
    <div class="alert alert-success" role="alert">
    Your file was successfully uploaded
    </div>
<?php endif ?>

<div class="container-sm">
<form action="file-uploader\index.php" style="text-align: left; "  method="POST" enctype="multipart/form-data">
  <div class="container">  
    <h1>Registeration Form</h1>
<pre>
    <label for="username">Complete Name:</label>    <input type="text" placeholder="" name="email" id="complete_name" required></br>
    
    <label for="email">Email:</label>            <input type="text" placeholder="" name="email" id="email"  required></br>
   
    <label for="password">Password:</label>         <input type="password" placeholder="" name="password" id="password" required></br>

    <label for="confirm_password">Confirm Password:</label> <input type="password" placeholder="" name="confirm_password" id="confirm_password" required></br>

    <label for="picture">Picture</label>            <input type="file" placeholder="Choose File" name="picture" id="picture" required></br></br>
    <input type="submit" value="submit">
    
</pre>
  </div>
</form>
</body>
