<?php
print_r($_POST);
$error = "";

  if($_POST){
    if(!$_POST["subject"]){
      $error = $error."Subject is required<br>";
    }
    if(!$_POST["message"]){
      $error = $error."message is required<br>";
    }
    if(!$_POST["email"]){
      $error = $error."email is required<br>";
    }
    if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
      $error = $error."Invalid email format";
    }
    if($error != ""){
      $errMsg = " <div class='alert alert-danger' role='alert'>
      ".$error."</div>";
    }
    else{
      $success = "";
    }
  }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Contact us</title>
  </head>
  <body>
  <div class = "container">
      <h1>Get in touch!</h1>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <form method = "post">
  <div class="form-group">
  <div id="error"><?php echo $errMsg.$success; ?></div>

    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" name = "email" placeholder="name@example.com">
  </div>
  <div class="form-group">
    <label for="email">Subject</label>
    <input type="subject" class="form-control" id="subject" name = "subject"  placeholder="name@example.com">
  </div>
 
  <div class="form-group">
    <label for="message">Message</label>
    <textarea class="form-control" id="message" name = "message" rows="3"></textarea>
  </div>
  <button type="submit" id="submit" class="btn btn-primary">Submit</button>

</form>
  </div>
  <script type= "text/javascript">

  // $("#target").click(() =>{
  //     $("#error").html("<h1>This is a sample text</h1>")
  // })
    $("form").submit(function(e){
      console.log("Function invoked");
      var error = "";
        if($("#email").val()==""){
          error = error + "Email is required <br>";
        }
        if($("#subject").val()==""){
          error = error + "Subject is required <br>";
        }
        if($("#message").val()==""){
          error = error + "Message is required <br>";
        }
        if(error!=""){
          $("#error").html('<div class="alert alert-danger" role="alert">' + error + '</div>');
          return true;
        }
        else{
          return true;
        }
        
      })
  </script>
  </body>
</html>