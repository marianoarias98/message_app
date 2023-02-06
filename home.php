<?php
  require "./inc/session_start.php";
  // require "./sql/database.php";

  $email = $_GET["email"];

  // $messages = $conn->prepare("SELECT * from messages where emailremitente = :emailmremitente");
?>
<?php require "./inc/head.php"?>
<body>
<?php require "./inc/navbar_home.php"?>
    <div class="d-flex flex-column mb-3 main-container">
      <div class="top-nav">
        <div class="mb-3">
          <a href="#" class="later-ietm">Recibidos</a>
        </div>
        <div class="mb-3">
          <a href="#" class="later-ietm">Enviados</a>
        </div>
      </div>
    </div>
    <div class="messages-container">
      <!-- <?php foreach($messages as $message) {?>
        <div class="card-message">
          <h5 class="message-title"><?php $message["emisor"]?></h5>
          <p class="message-body"><?php $message["body"]?></p>
        </div>
      <?php }?> -->
    </div>
</body>