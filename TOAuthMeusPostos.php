<?php
include_once "TOAuthClient.php";
class TOAuthMeusPostos 
{
   private $_objOAuth;
   private $_url;
   private $_key;
   
   private $_status;
   private $_detail;
   private $_request_uri;
   private $_created_at;
   private $_elapsed_time;
   
   
   //---------------------------------------------------------------------------
   public function __construct($consumerKey, $consumerSecret, $Url, $Key)
   {
      $this->_objOAuth = new TOAuthClient($consumerKey, $consumerSecret);
      $this->_url      = $Url;
      $this->_key      = $Key;
      $this->_objOAuth->setApiUrl($this->_url);
   }  
   //---------------------------------------------------------------------------
   public function Executa($Parametros = array())
   {
         $oauthHeaders['oauth_signature'] =  $this->_objOAuth->signedString();     
         $_h = array('Expect:');
         $_h[] = $this->_objOAuth->getHeader();
         
         $this->_objOAuth->ClearParams();
         if(sizeof($Parametros) > 0)
         {
            foreach ($Parametros as $key=>$value)
            {
               $this->_objOAuth->AddParam($key, $value);
               $get .= "{$key}={$value}&";
            }
            $get = "?".substr($get, 0, strlen($get)-1);
         }
         //echo $this->_url."{$get}";
         $ch = curl_init();
         //echo "<textarea>";
         if($ch)                                                 
         {     
            if( !curl_setopt($ch, CURLOPT_URL, $this->_url."{$get}") )  return "FAIL: curl_setopt(CURLOPT_URL)";   
            if( !curl_setopt($ch, CURLOPT_HEADER, 0) )         return "FAIL: curl_setopt(CURLOPT_HEADER)";
            if( !curl_setopt($ch, CURLOPT_POST, 1) )           return "FAIL: curl_setopt(CURLOPT_POST)";
            if( !curl_setopt($ch, CURLOPT_HTTPHEADER, $_h))    return "FAIL: curl_setopt(CURLOPT_HTTPHEADER)"; 
            if( !curl_setopt($ch, CURLOPT_HTTPHEADER, $_h))    return "FAIL: curl_setopt(CURLOPT_HTTPHEADER)";                       
            ob_start(); 
            curl_exec($ch);
            curl_close($ch);
            $json = ob_get_contents(); 
            ob_end_clean();
         }                                                 
         $array = json_decode($json, true);
          //var_dump($array);   
         
         $this->_status       = $array['data']['status'];
         $this->_detail       = $array['data']['detail'];
         $this->_request_uri  = $array['data']['resquest_uri'];
         $this->_created_at   = $array['data']['created_at'];
         $this->_elapsed_time = $array['data']['elapsed_time'];
         return $array['data'][$this->_key]; 
         
   } 
   //---------------------------------------------------------------------------
   public function __get($var) 
   {
      switch($var) 
      {
         case "Status":          return $this->_status;         
         case "Detail":          return $this->_detail;
         case "RequestUri":      return $this->_request_uri;
         case "CreatedAt":       return $this->_created_at;
         case "ElapsedTime":     return $this->_elapsed_time;
           
         default:                return "Value of $var not defined";
      } 
   }   
}
?>

