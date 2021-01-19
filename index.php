<?php
   require_once('dipendenti.php');

   try {
      $impiegato_1_salariato = new ImpiegatoSalariato('Fabrizio','Nicolosi','NCLFRZ01E01E000E',1,0,85);
      echo
      $impiegato_1_salariato->to_string() .
      "<br>" .
      "Compenso:" .
      $impiegato_1_salariato->calcola_compenso() .
      "€" .
      "<br>";
   } catch (Exception $e) {
      echo 'Attenzione: ' . $e->getMessage();
   }


?>
