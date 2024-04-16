<?php 



include __DIR__ . '/partials/head.php';
require_once __DIR__ . '/partials/function.php';
$lunghezza = $_GET['lunghezza'];
$ripetizione = $_GET['ripetizioni'];

$error = '';
// grazie all'if controllo se ' una striga vuota o un numero
if ($lunghezza === '' || !ctype_digit($lunghezza)) {
  $error = 'Nessun parametro valido';
}else{
  $password = generaPassword($lunghezza, $ripetizione);
  // qua genero la password e la passo alla sessione
  session_start();
  $_SESSION['password'] = $password;
  header('Location: success.php');
}

var_dump($_GET)

?>

<body>
  <div class="container d-flex flex-column align-items-center">
    <div class="top d-flex align-items-center flex-column  ">
      <h2>Strong Password Generator</h2>
      <h3>Genera una password dicura</h3>
    </div>
    <div class="main">
      <h3 class="text-danger"><?php echo $error ?> <?php echo $password ?></h3>
    </div>
    <form action="index.php" method="get">
      <div class="bottom d-flex">
      <div class="bott-left">
        <p>Lunghezza Password:</p>
        <p>Consenti ripetiuzioni di uno o più caratteri:</p>
        <button class="btn btn-danger"  type="submit">Invia</button>
      </div>
      <div class="bott-right">
        <input name="lunghezza" type="text" placeholder="Scrivi la lunghezza">
        <div class="form-check form-switch">
          <input class="form-check-input" name="ripetizioni" type="checkbox" role="switch" id="flexSwitchCheckDefault">
          <label class="form-check-label" for="flexSwitchCheckDefault">Ripetizioni</label>
        </div>

      </div>
    </div>
    </form>
    
  </div>
</body>
</html>