<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <title></title>
  </head>
  <body>
    <div class="wrapper bg-white">
    <div class="h2 text-center">FoodNation</div>
    <div class="h4 text-muted text-center pt-2">Register</div>
    <form action="../includes/otp.inc.php" method="post" class="pt-3">
    <div class="form-group py-2">
            <div class="input-field"> <span class="far fa-user p-2"></span> <input type="text" placeholder="Name" name="name"> </div>
        </div>
        <div class="form-group py-2">
            <div class="input-field"> <span class="far fa-user p-2"></span> <input type="text" placeholder="Email Address" name="email"> </div>
        </div>
        <div class="form-group py-2">
            <div class="input-field"> <span class="far fa-user p-2"></span> <input type="text" placeholder="Username" name="username"> </div>
        </div>
        <div class="form-group py-1 pb-2">
            <div class="input-field"> <span class="fas fa-lock p-2"></span> <input type="password" placeholder="Enter your Password" name="password"> <button class="btn bg-white text-muted"> <span class="far fa-eye-slash"></span> </button> </div>
        </div>
        <div class="d-flex align-items-start">
          <input type="submit" hidden>
        </div> <button type="submit" name="submit" class="btn btn-block text-center my-3">Signup</button>
        <div class="text-center pt-3 text-muted">Already Registered? <a href="index.php">Log in</a></div>
    </form>


    <!-- error check -->
    <?php
if(isset($_GET["username"])){
  echo "<p style='color:red;text-align:center;'>Username Taken<p>";
}
if(isset($_GET["takenemail"])){
  echo "<p style='color:red;text-align:center;'>Email Already in Use<p>";
}
if(isset($_GET["email"])){
  echo "<p style='color:red;text-align:center;'>Please Enter a Valid Email<p>";
}
?>
</div>


  </body>
</html>
