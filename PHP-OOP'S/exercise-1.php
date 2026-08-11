<?php

/*
Write a PHP class named Bank with properties for account number, name, and a default balance of 0,
 including methods to deposit money, deduct money (with validation checks for zero or insufficient balance), 
 and display the current balance, then instantiate it to simulate these financial transactions.
*/

class Bank
{
    public $account_number;
    public $name;
    public $default_balance=0;

    public function deposit_money($deposit)
    {
        $this->default_balance=$deposit;
        echo "Deposit amount is $deposit"."<br>";
    }

    public function deduct_money($deduct)
    {
        if($this->default_balance<=0)
            {
                echo "Insufficient balance in the account"."<br>";
            }
        else
            {
                $deduct_bal=$this->default_balance-$deduct;

                echo "The deducted balance is $deduct_bal"."<br>";
            }
    }
}

$obj =new Bank();

echo $obj->deduct_money(200);

$bal =$obj->deposit_money(500);

echo "<br>"."$bal";

echo $obj->deposit_money(1000).$obj->deduct_money(500);

echo $obj->deposit_money(2000);

echo $obj->deduct_money(400);

echo $obj->deduct_money(200);

echo "<br>";

echo $obj->deposit_money(1800).$obj->deduct_money(200);
echo $obj->deduct_money(200);
echo $obj->deduct_money(200);

?>