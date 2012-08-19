<?php
include_once "TOAuthMeusPostos.php";
class TMeusPostosPostos
{
   private $_objOAuth;
   
   private $_posto;
   
   private $_cd_posto;
   private $_carregado;
   
   
   //---------------------------------------------------------------------------
   public function __construct($consumerKey, $consumerSecret)
   {
      $this->_objOAuth = new TOAuthMeusPostos($consumerKey, $consumerSecret, "http://api.meuspostos.com.br/posto.json", "postos");
      $this->_carregado      = false;
   }     
   //---------------------------------------------------------------------------
   public function __get($var) 
   {
      switch($var) 
      {    
         case "Posto":         return "Please use getPosto(\$index) instead";           
         default:              return "Value of $var not defined";
      } 
   }   
   //---------------------------------------------------------------------------
   public function getPosto($Posto)
   {
      if($this->_carregado === false)
      {
         $this->_posto = $this->_objOAuth->Executa(array("posto" => $Posto));         
         if($this->_objOAuth->Status == 200)
         { 
            $this->_posto = $this->_posto[0];
            $this->_carregado = true; //Lista de cidades só precisa ser carregada uma unica vez por sessão.
         }
         else
         { 
            $this->_posto = null; //evita acidentes
            return false;
         }
      }  
      return $this->_posto;
   }
}
?>
                  