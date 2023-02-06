<?php
  // require "./sql/database.php";
  $err = null;

  if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $email = $_POST["email"];
    $passwd = $_POST["password"];
    if((filter_var($email, FILTER_VALIDATE_EMAIL))){
      // $statement = $conn->prepare("SELECT * from users WHERE email = :email AND passwd = :passwd" );
      // $statement->execute([":email" => $email], [":passwd" => $passwd]);
  
      // if($statement->rowConunt() != 0){
        header("Location: home.php?email=$email");
      // }else{
        // $err = "Datos incorrectos";
      // }
    // }else{
      // $err = "Email con formato invalido";
    }
  }
?>
<?php require "./inc/head.php"?>
<body>
  <?php require "./inc/navbar.php"?>
    <div class="d-flex flex-column mb-3 main-container">
      <form action="index.php" method="post" class="form">
        <h3>Ingresar al sistema</h3>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Email address</label>
          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="email" name="email">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Password</label>
          <input type="password" name="password" id="" class="form-control" placeholder="password">
        </div>
      
        <div class="mb-3">
          <input type="submit" value="Log in">
        </div>
      </div>

      <div class="mb-3">
          <?php if($err != null){?>
            <p class="text-danger"><?php$err?></p>
          <?php }?>
        </div>
      </form>
    <?php require "./inc/script.php"?>
</body>
</html>