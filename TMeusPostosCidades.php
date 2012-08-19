<?php
include_once "TOAuthMeusPostos.php";
class TMeusPostosCidades
{
   private $_objOAuth;
   
   private $_Acidades;
   
   private $_carregado;
   
   
   //---------------------------------------------------------------------------
   public function __construct($consumerKey, $consumerSecret)
   {
      $this->_objOAuth = new TOAuthMeusPostos($consumerKey, $consumerSecret, "http://api.meuspostos.com.br/cidades.json", "cidades");
      $this->_carregado      = false;
   }     
   //---------------------------------------------------------------------------
   public function __get($var) 
   {
      switch($var) 
      {
         case "Tamanho":         { //hack para carregar cidades se necessário
                                    if($this->getCidade(0) == false) return 0;
                                    else return sizeof($this->_Acidades);
                                 }         
         case "Cidades":         return "Please use getCidade(\$index) instead";
           
         default:                return "Value of $var not defined";
      } 
   }   
   //---------------------------------------------------------------------------
   public function getCidade($Index)
   {
      if($this->_carregado === false)
      {
         $this->_Acidades = $this->_objOAuth->Executa();
         if($this->_objOAuth->Status == 200)
         { 
            $this->_carregado = true; //Lista de cidades só precisa ser carregada uma unica vez por sessão.
         }
         else
         { 
            $this->_Acidades = null; //evita acidentes
            return false;
         }
      }  

      if($Index < 0) $Index = 0;
      if($Index >= sizeof($this->_Acidades))  $Index = sizeof($this->_Acidades)-1;
      return $this->_Acidades[$Index]; 
   }
}
?>
