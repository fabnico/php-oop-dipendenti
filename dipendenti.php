<?php

class Persona{
   public $nome;
   public $cognome;
   public $codice_fiscale;

   public function __construct($nome,$cognome,$codice_fiscale){
      $this->nome = $nome;
      $this->cognome = $cognome;
      $this->codice_fiscale = $codice_fiscale;
   }
}

class Impiegato extends Persona{
   public $codice_impiegato;
   public $compenso;

   public function __construct($nome,$cognome,$codice_fiscale,$codice_impiegato,$compenso){
      parent::__construct($nome, $cognome, $codice_fiscale);
      $this->codice_impiegato = $codice_impiegato;
      $this->compenso = $compenso;
   }

   public function to_string(){
      return  $this->nome . $this->cognome . $this->codice_fiscale . $this->codice_impiegato . $this->compenso;
   }

   public function calcola_compenso(){
      return $this->compenso;
   }
}

class ImpiegatoSalariato extends Impiegato{

   public $giorni_lavorati;
   public $compenso_giornaliero;

   public function __construct($nome,$cognome,$codice_fiscale,$codice_impiegato,$giorni_lavorati,$compenso_giornaliero){
      parent::__construct($nome,$cognome,$codice_fiscale,$codice_impiegato);
      $this->giorni_lavorati = $giorni_lavorati;
      $this->compenso_giornaliero = $compenso_giornaliero;
   }

   public function calcola_compenso(){
      return $this->giorni_lavorati * $this->compenso_giornaliero;
   }

}

class ImpiegatoAOre extends Impiegato{

   public $ore_lavorate;
   public $compenso_orario;

   public function __construct($nome,$cognome,$codice_fiscale,$codice_impiegato,$ore_lavorate,$compenso_orario){
      parent::__construct($nome,$cognome,$codice_fiscale,$codice_impiegato);
      $this->ore_lavorate = $ore_lavorate;
      $this->compenso_orario = $compenso_orario;
   }

   public function calcola_compenso(){
      return $this->ore_lavorate * $this->compenso_orario;
   }

}



$impiegato1 = new ImpiegatoSalariato('Fabrizio','Nicolosi','CODICEFISCALE',01,20,85);



?>
