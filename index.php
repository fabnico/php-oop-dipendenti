<?php
   require_once('dipendenti.php');

   echo
      $impiegato_1_salariato->to_string() .
      "<br>" .
       "Compenso:" .
       $impiegato_1_salariato->calcola_compenso() .
       "€" .
       "<br>";

   echo
      "<br>" .
      $impiegato_1_ore->to_string() .
      "<br>" .
      "Compenso:" .
      $impiegato_1_ore->calcola_compenso() .
      "€" .
      "<br>";

?>
