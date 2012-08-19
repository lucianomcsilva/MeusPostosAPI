<?php
include_once "TOAuthMeusPostos.php";
class TMeusPostosRegioes
{
   private $_objOAuth;
   
   private $_Aregioes;
   
   private $_carregado;
   
   
   //---------------------------------------------------------------------------
   public function __construct($consumerKey, $consumerSecret)
   {
      $this->_objOAuth = new TOAuthMeusPostos($consumerKey, $consumerSecret, "http://api.meuspostos.com.br/regioes.json", "regioes");
      $this->_carregado      = false;
   }     
   //---------------------------------------------------------------------------
   public function __get($var) 
   {
      switch($var) 
      {
         case "Tamanho":            { //hack para carregar cidades se necessário
                                    if($this->getRegiao(0) == false) return 0;
                                    else return sizeof($this->_Aregioes);
                                 }         
         case "Regiao":         return "Please use getRegiao(\$index) instead";
           
         default:                return "Value of $var not defined";
      } 
   }   
   //---------------------------------------------------------------------------
   public function getRegiao($Index)
   {
      if($this->_carregado === false)
      {
         $this->_Aregioes = $this->_objOAuth->Executa();
         if($this->_objOAuth->Status == 200)
         { 
            $this->_carregado = true; //Lista de cidades só precisa ser carregada uma unica vez por sessão.
         }
         else
         { 
            $this->_Aregioes = null; //evita acidentes
            return false;
         }
      }  

      if($Index < 0) $Index = 0;
      if($Index >= sizeof($this->_Aregioes))  $Index = sizeof($this->_Aregioes)-1;
      return $this->_Aregioes[$Index]; 
   }
}
?>
