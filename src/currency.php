<?php


namespace Hillel\src;


class currency
{
    private $isoCode;

    public function __construct  ($isoCode) {
        $this->setisoCode($isoCode);
    }

    private function setisoCode ($isoCode) {
        if(strlen($isoCode)!=3){
         throw new \InvalidArgumentException('Not correct value');
        }
        if (!ctype_alpha($isoCode)){
            throw new \InvalidArgumentException('Not correct value');
        }
       $this->isoCode=mb_strtoupper($isoCode);

    }
    public function getisoCode (){
      return $this->isoCode;
    }
    public function equal (currency  $code){

        if($this == $code){
            return true;
        }
       return false;
    }

}