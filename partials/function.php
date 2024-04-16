<?php 
function generaPassword($lunghezza, $ripetizioni) {
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

    if ( $ripetizioni == 'on') {
      for ($i = 0; $i < $lunghezza; $i++) { 
        $random = $tutti_caratteri[rand(0, $lunghezza_tutti_caratteri - 1)];
       if (strpos($password_generata , $random)=== false) {
         $password_generata .= $random;
       }else{
         $i--;
       }
     }
    }else{
      for ($i = 0; $i < $lunghezza; $i++)  { 
        $random = $tutti_caratteri[rand(0, $lunghezza_tutti_caratteri - 1)];
        $password_generata .= $random;
      }
    }

   

    // for ($i = 0; $i < $lunghezza; $i++) { 
      
    //    $random = $tutti_caratteri[rand(0, $lunghezza_tutti_caratteri - 1)];
    //   if (strpos($password_generata , $random)=== false) {
    //     $password_generata .= $random;
    //   }else{
    //     $i--;
    //   }
    // }

    // ritorno la password
    
    return $password_generata;
}
?>
