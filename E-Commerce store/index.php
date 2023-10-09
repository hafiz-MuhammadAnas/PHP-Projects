
<?php


session_start();

if(isset($_SESSION['email']) && isset($_SESSION['name']) )
{
     header('Location: front-view/public/index.php');
}






?>

<!doctype html>
<html lang="en">
  <head>
    <title>Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      
    <section class="vh-100" style="background-color: #eee;">
        <div class="container h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-xl-11">
              <div class="card text-black" style="border-radius: 25px;">
                <div class="card-body p-md-5">
                  <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
      
                      <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Login Form</p>
      
                      <form class="mx-1 mx-md-4" method="POST">
      
      
                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0">
                            <input name="email" type="email" id="form3Example3c" class="form-control" />
                            <label class="form-label" for="form3Example3c">Your Email</label>
                          </div>
                        </div>
      
                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0">
                            <input name="pass" type="password" id="form3Example4c" class="form-control" />
                            <label class="form-label" for="form3Example4c">Password</label>
                          </div>
                        </div>
      
                        
      
                        
      
                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                          <button name="btn" type="submit" class="btn btn-primary btn-lg">Login</button> &nbsp;&nbsp;&nbsp;&nbsp;
                          <a href="signup.php">Signup</a>
                        </div>
      
                      </form>
      
                    </div>
                    <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
      
                      <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp"
                        class="img-fluid" alt="Sample image">
      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

<?php
if(isset($_POST["btn"]))
{

    $host="localhost";
    $user="root";
    $pwd="";
    $database="ebook";
    $conn=mysqli_connect($host,$user,$pwd,$database);

   $Email = $_POST["email"];
   $Pass = $_POST["pass"];

   $sql = "SELECT * FROM `users` WHERE `email` = '".$Email."' AND `pwd` = '".$Pass."'";

   $result = mysqli_query($conn, $sql);

   if(mysqli_num_rows($result) > 0)
    {
        while ($rowss = mysqli_fetch_assoc($result))
        
        { 
            $id = $rowss['user_id'];
            $name = $rowss['name'];
            $email = $rowss['email'];
            $pass = $rowss['pwd'];
            $contact = $rowss['contact'];
        }

        $_SESSION["id"] = $id;
        $_SESSION["name"] = $name;
        $_SESSION["email"] = $email;
        $_SESSION["pass"] = $pass;
        $_SESSION["contact"] = $contact;


        echo "<script>
		alert('Login successfully');
		window.location.href='front-view/public/index.php';
	</script>"; 
        

    }

}
?>