<?php 
  session_start();

  if (!isset($_SESSION['password'])) {
    header('Location: /index.php');
  }else{
    $password = $_SESSION['password'];
  }
?>

<?php include __DIR__ . '/partials/head.php' ?>
<body>
  <h1><?php echo $password ?></h1>
</body>
</html>