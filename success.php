<?php 
  session_start();

  if (!isset($_SESSION['password'])) {
    header('Location: index.php');
  }else{
    $password = $_SESSION['password'];
  }

?>

<?php include __DIR__ . '/partials/head.php' ?>
<body>
  <form action="index.php" method="POST">
     <h1>La tua password è: <strong class="text-danger"><?php echo $password ?></strong></h1>
    <button type="submit" class="btn btn-success "> Restart</button>
  </form>
 
</body>
</html>