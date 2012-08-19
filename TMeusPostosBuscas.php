<?php
include_once "TOAuthMeusPostos.php";
define("ordemDISTANCIA", 0);
define("ordemGASOLINA" , 1);
define("ordemALCOOL"   , 2);
define("ordemDIESEL"   , 3);
define("ordemGNV"      , 4);
define("ordemNOME"     , 5);

class TMeusPostosBuscas
{
   private $_objOAuth;
   
   private $_Apostos; //lista retornada
   
   private $_cd_posto;
   private $_carregado;
   
   
   //---------------------------------------------------------------------------
   public function __construct($consumerKey, $consumerSecret)
   {
      $this->_objOAuth = new TOAuthMeusPostos($consumerKey, $consumerSecret, "http://api.meuspostos.com.br/busca.json", "busca");
      $this->_carregado      = false;
   }     
   //---------------------------------------------------------------------------
   public function __get($var) 
   {
      switch($var) 
      {    
         case "Tamanho":       return sizeof($this->_Apostos);                               
         case "Busca":         return "Please use getBusca(\$index) instead";           
         default:              return "Value of $var not defined";
      } 
   }   
   //---------------------------------------------------------------------------
   public function buscaPorChave($Chave, $Ordem=ordemNOME, $Cidade="", $Bairro = "")
   {      
      $this->_Apostos = $this->_objOAuth->Executa(array("cidade" => $Cidade, "bairro" => $Bairro, "chave" => $Chave, "ordem" => $Ordem));
      if($this->_objOAuth->Status != 200)
      { 
         $this->_Apostos = null;
         return false;
      }   
      return true;
   }
   //---------------------------------------------------------------------------
   public function buscaPorCoordenada($Latitude, $Longitude, $Ordem=ordemDISTANCIA)
   {
      $this->_Apostos = $this->_objOAuth->Executa(array("lat" => $Latitude, "lon" => $Longitude, "ordem" => $Ordem));      
      if($this->_objOAuth->Status != 200)
      { 
         $this->_Apostos = null;
         return false;
      }   
      return true;
   }
   //---------------------------------------------------------------------------
   public function getPosto($Index)
   {
      if(sizeof($this->_Apostos) == 0) return null;
      if($Index < 0) $Index = 0;
      if($Index >= sizeof($this->_Apostos))  $Index = sizeof($this->_Apostos)-1;
      return $this->_Apostos[$Index]; 
   }
}
?>
                  