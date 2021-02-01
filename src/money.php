<?php


namespace Hillel\src;


class money
{
    private $amount;
    private  \Hillel\src\currency $currency;

    public function __construct ($amount,\Hillel\src\currency $currency){
      $this->setAmount($amount);
      $this->setCurrency($currency);
    }


    public function getAmount()
    {
        return $this->amount;
    }


    public function setAmount(float $amount): void
    {
        $this->amount = $amount;
    }


    public function getCurrency(): currency
    {
        return $this->currency;
    }



    public function setCurrency(currency $currency): void
    {
        $this->currency = $currency;
    }
    public function equal (money  $code){

        if($this == $code){
            return true;
        }
        return false;
    }
    public function add (money $code){

        if(!$this->currency->equal( $code->currency)){
            throw new \InvalidArgumentException('Different currences cant be add');
        }

        return new money($this->getAmount()+$code->getAmount(), $this->getCurrency());
    }

}
