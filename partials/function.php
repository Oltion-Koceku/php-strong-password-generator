<?php 
function generaPassword($lunghezza) {
    // definisci i caratteri possibili per ogni categoria
    $minuscole = 'abcdefghijklmnopqrstuvwxyz';
    $maiuscole = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numeri = '1234567890';
    $caratteri_speciali = '!?&%$<>^+-*/()[]{}@#_=';
    
    // li concateno insieme
    $tutti_caratteri = $minuscole . $maiuscole . $numeri . $caratteri_speciali;
    
    // ottengo la lunghezza
    $lunghezza_tutti_caratteri = strlen($tutti_caratteri); 
    $password_generata = '';

    // con uyesto ciclo for estraggo un numero e lo uso in un array

    for ($i = 0; $i < $lunghezza; $i++) { 
        $random = $tutti_caratteri[rand(0, $lunghezza_tutti_caratteri - 1)];
        $password_generata .= $random;
    }

    // ritorno la password
    
    return $password_generata;
}
?>
