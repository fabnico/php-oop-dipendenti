<?php
   require_once('dipendenti.php');
   echo $impiegato1->to_string();
   echo "<br>" . "Compenso:";
   echo $impiegato1->calcola_compenso() . "€";
?>
