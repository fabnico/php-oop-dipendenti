<?php

class Persona{
   public $nome;
   public $cognome;
   public $codice_fiscale;

   public function __construct($nome, $cognome, $codice_fiscale){
      $this->nome = $nome;
      $this->cognome = $cognome;
      $this->codice_fiscale = $codice_fiscale;
   }
}

class Impiegato extends Persona{
   public $codice_impiegato;
   protected $compenso;

   public function __construct($nome, $cognome, $codice_fiscale, $codice_impiegato, $compenso){
      parent::__construct($nome, $cognome, $codice_fiscale);
      $this->codice_impiegato = $codice_impiegato;
      $this->compenso = $compenso;
   }

   public function to_string(){
      return "Nome: " . $this->nome . "<br>" . " Cognome: " . $this->cognome . "<br>" . "Codice Fiscale: " .  $this->codice_fiscale . "<br>" . "Identificativo: " . $this->codice_impiegato ;
   }

   public function calcola_compenso(){
      return $this->compenso;
   }
}

class ImpiegatoSalariato extends Impiegato{

   public $giorni_lavorati;

   public function __construct($nome, $cognome, $codice_fiscale, $codice_impiegato, $giorni_lavorati, $compenso_giornaliero){
      parent::__construct($nome, $cognome, $codice_fiscale, $codice_impiegato, $compenso_giornaliero);
      $this->giorni_lavorati = $giorni_lavorati;
   }

   public function calcola_compenso(){
      return $this->giorni_lavorati * $this->compenso;
   }

}

class ImpiegatoAOre extends Impiegato{

   public $ore_lavorate;

   public function __construct($nome, $cognome, $codice_fiscale, $codice_impiegato, $ore_lavorate, $compenso_orario){
      parent::__construct($nome, $cognome, $codice_fiscale, $codice_impiegato, $compenso_orario);
      $this->ore_lavorate = $ore_lavorate;
      $this->compenso_orario = $compenso_orario;
   }

   public function calcola_compenso(){
      return $this->ore_lavorate * $this->compenso_orario;
   }

}

class ImpiegatoSuCommissione extends Impiegato{
   use Progetto;

   public function __construct($nome, $cognome, $codice_fiscale, $codice_impiegato, $nome_progetto, $commissione){
      parent::__construct($nome, $cognome, $codice_fiscale, $codice_impiegato, $commissione );
   }

   public function calcola_compenso(){
      return $this->commissione;
   }

}

trait Progetto{

   public $nome_progetto;
   public $commissione;
}

$impiegato_1_salariato = new ImpiegatoSalariato('Fabrizio','Nicolosi','NCLFRZ01E01E000E',1,20,85);
$impiegato_1_ore = new ImpiegatoAOre('Tizio','de Tizi','TZZDTZZ01E01E000E',2,150,12);


?>
