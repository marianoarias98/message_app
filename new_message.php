<P<?php
    
?>
<?php require "./inc/head.php"?>
<body>
    <?php require "./inc/navbar_home.php"?>
    <div class="d-flex flex-column mb-3 main-container">
        <form action="" method="post" class="form">
          <h3>Enviar Mensaje</h3>
          <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Nombre</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name" name="name">
          </div>

          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Message</label>
                <textarea class="form-control" placeholder="Message" id="floatingTextarea" name="message"></textarea>
          </div>
          
          <div class="mb-3">
              <input type="submit" value="Send">
          </div>
        </form>
    </div>
</body>