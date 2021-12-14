<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="form signup">
      <header>Chat em Tempo Real</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="name-details">
          <div class="field input">
            <label>Primeiro Nome</label>
            <input type="text" name="fname" placeholder="Insere o teu nome" required>
          </div>
          <div class="field input">
            <label>Ultimo Nome</label>
            <input type="text" name="lname" placeholder="Insere o teu nome" required>
          </div>
        </div>
        <div class="field input">
          <label>Endereço de email</label>
          <input type="text" name="email" placeholder="Insere o teu email" required>
        </div>
        <div class="field input">
          <label>Password</label>
          <input type="password" name="password" placeholder="Insere a tua password" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field image">
          <label>Insere uma Imagem</label>
          <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Continuar para o Chat">
        </div>
      </form>
      <div class="link">Já tens uma conta? <a href="login.php">Entra na tua conta</a></div>
    </section>
  </div>

  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></script>

</body>
</html>
