<?php
    require "./inc/session_start.php";
    // require "./sql/database.php";

    $err = null;
    $succm = null;

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
      $name = $_POST["name"];
      $email = $_POST["email"];
      $passwd = $_POST["password"];
      if((filter_var($email, FILTER_VALIDATE_EMAIL))){
        // $statement = $conn->prepare("SELECT * from users WHERE email = :email");
        $statement->execute([":email" => $email]);
      }

      if($statement->rowConunt() == 0){
          // $statement->prepare("INSERT INTO users (name, email, passwd) values (:name, :email, :passwd");
          $statement->execute([
            ":name" => $name,
            ":email" => $email,
            ":passwd" => $passwd]
          );
          $succm = "Estas registrado";
        }else{
          $err = "Email ya existente";
        }
    }
?>
<?php require "./inc/head.php"?> 
<body>
    <div class="d-flex flex-column mb-3 main-container">
      <form action="" method="post" class="form">
          <h3>Registrarse en el sistema</h3>
          <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Nombre</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name" name="name">
          </div>

          <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Email address</label>
              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="email">
          </div>

              <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label">Password</label>
              <input type="password" name="" id="" class="form-control" placeholder="password">
          </div>
          
          <div class="mb-3">
              <input type="submit" value="Register">
          </div>

          <!-- <div class="mb-3">
              <?php if($err != null){?>
                  <p class="text-danger"><?php$err?></p>
              <?php }?>
              <?php if($succm != null){?>
                <p class="text"><?php$succ?></p>
              <?php }?>
          </div> -->
        </form>
    </div>
    <?php require "./inc/script.php"?>
</body>
</html>