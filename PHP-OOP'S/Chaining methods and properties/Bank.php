<?php
/*
Write a PHP script using object-oriented programming to create a Bank class with properties for account number,
name, and balance, and methods to deposit money, check the balance, and safely deduct funds with error handling 
for insufficient balances.
 */

class Bank
{
    public $account_number;
    public $name;
    public $balance;

    function __construct($acc,$name,$bal)
    {
        $this->account_number=$acc;
        $this->name=$name;
        $this->bal=$bal;
    }
    
    public function deposit_money($amt)
    {
        if($amt>=0)
            {
                $this->balance=$amt;
                echo "balance is = $this->balance"."<br>";
            }

        return $this;//to chain the method
        
    }

    public function deduct_money($deduct)
    {
        if($this->balance<$deduct)
            {
                echo "insufficient balance to deduct"."<br>";
            }

        if($this->balance>=$deduct)
            {
                
                echo "deducted amount is = $deduct"."<br>";
                $this->balance=$this->balance-$deduct;
                echo "Balance after deduction is = $this->balance"."<br>";
            }
        
        echo "Current Balance is = $this->balance"."<br>";

        return $this;//to chain the method
        
    }
}

$obj = new Bank(1012,'Anubhav',0);

$obj->deposit_money(1000)->deduct_money(200);//deposit_moneymethod should be first then deduct_money should be chained , 
//this is the importance of chaining it helps you to mantain the sequence

?>