<!DOCTYPE html>
<html>
    <head>
        <title>Signup</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
           .container-fluid{
            position: relative;
            top: 100px;
            
            }
            footer{
            position: relative;
            top: 130px;
            border: 1px solid black;
            background-color: gray;
        }
        </style>
    </head>

    <body>
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>                        
                </button>
                <a class="navbar-brand" href="index.php">BAVA Lifestyle Store</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
            </div>
        </div>
    </div>
        <div class="container-fluid">
          <div class="row col-md-6 col-md-offset-3">
            <div class="panel panel-primary">
              <div class="panel-heading text-center">
                <h1>Registration Form</h1>
              </div>
              <div class="panel-body">
                <form action="signup.php" method="post">
                  <div class="form-group">
                    <label for="firstName">First Name</label>
                    <input
                      type="text"
                      class="form-control"
                      id="firstName"
                      name="firstName"
                    />
                  </div>
                  <div class="form-group">
                    <label for="lastName">Last Name</label>
                    <input
                      type="text"
                      class="form-control"
                      id="lastName"
                      name="lastName"
                    />
                  </div>
                  <div class="form-group">
                    <label for="gender">Gender</label>
                    <div>
                      <label for="male" class="radio-inline"
                        ><input
                          type="radio"
                          name="gender"
                          value="m"
                          id="male"
                        />Male</label
                      >
                      <label for="female" class="radio-inline"
                        ><input
                          type="radio"
                          name="gender"
                          value="f"
                          id="female"
                        />Female</label
                      >
                      <label for="others" class="radio-inline"
                        ><input
                          type="radio"
                          name="gender"
                          value="o"
                          id="others"
                        />Others</label
                      >
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input
                      type="text"
                      class="form-control"
                      id="email"
                      name="email"
                    />
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input
                      type="password"
                      class="form-control"
                      id="password"
                      name="password"
                    />
                  </div>
                  <div class="form-group">
                    <label for="number">Phone Number</label>
                    <input
                      type="number"
                      class="form-control"
                      id="number"
                      name="number"
                    />
                  </div>
                  <input type="submit" class="btn btn-primary" />
                </form>
              </div>
              <div class="panel-footer text-right">
                <small>&copy; Technical Babaji</small>
              </div>
            </div>
          </div>
        </div>
       
      </div>
      <?php
      if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        $email = $_POST['email'];
        $password = $_POST['pass'];
        // $encrypted_password = md5($password);
      // Connecting to the Database
     
     
      $servername = "localhost";
      $username = "root";
      $pasword = "";
      $database = "store";

      // Create a connection
      $conn = mysqli_connect($servername, $username, $pasword, $database);
      // Die if connection was not successful
      if (!$conn){
          die("Sorry we failed to connect: ". mysqli_connect_error());
      }
      else{ 
        // Submit these to a database
        // Sql query to be executed 
        $sql = "INSERT INTO `register` (`firstName`,`lastName`, `gender`,`email`, `password`, `phone`) VALUES ('$fistname', '$lastname',  '$email','$password', current_timestamp())";
        $result = mysqli_query($conn, $sql);
        if($result){
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> Your entry has been submitted successfully!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>';
          }
          else{
              // echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
              echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> We are facing some technical issue and your entry ws not submitted successfully! We regret the inconvinience caused!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>';
          }
  
        }
  
      }
      ?>
  
      
    <footer>
        <div class="container">
            <center>
                <p>Copyright &copy; BAVA Lifestyle Store. All Rights Reserved  |  Contact Us: +91 90000 00000</p>	
            </center>
        </div>
    </footer>
      </body>
</html>