<?php

class Bank{

    private $accountNo;
    private $accountName;
    private $balance;

    public function __construct($accountNo,$accountName,$balance){
        $this->accountNo=$accountNo;
        $this->accountName=$accountName;
        $this->balance=$balance;
    }
    public function __get($property)
    {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
    }

    public function __set($property, $value)
    {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        }

        return $this;
    }
    public function __toString(): string
    {
       return "AccountNo :$this->accountNo, Account Holder's Name:$this->accountName,Available Balance: $this->balance";
    }

    static function sortByProperty($accounts, $property)
    {
        $size = count($accounts) - 1;
        for ($i = 0; $i < $size; $i++) {
            for ($j = 0; $j < $size - $i; $j++) {
                $k = $j + 1;
                if ($accounts[$k]->$property < $accounts[$j]->$property) {
// Swap the elements at j-th and k-th indices
                    list($accounts[$j], $accounts[$k]) = array($accounts[$k], $accounts[$j]);
                }
            }
        }
        return $accounts;
    
}
public function credit($amount): int
{
        return $this->balance +=$amount;
}
public function debit($amount){
        if(($this->balance - $amount) < 0){
            echo("Insufficient Balance");

    }return $this->balance -=$amount;
}
    static function searchByName($accounts,$property,$name){
        $size = count($accounts) - 1;
        for ($i = 0; $i < $size; $i++) {
            for ($j = 0; $j < $size - $i; $j++) {
                $k = $j + 1;
                if ($accounts[$k]->$property = $name) {
// Swap the elements at j-th and k-th indices
                    return $accounts[$k];
                }
            }
        }

    }





}
$account1 = new Bank(893456,"Bharat",10000);
$account2 = new Bank(456738,"Vishal",51200);
$account3 = new Bank(123456,"Ram",30400);

$accounts = array($account1,$account2,$account3);
print("\nInitial records\n");
print_r($accounts);
$account1->credit(2000);
$account2->credit(2000);
$account3->credit(2000);
print("\nAfter Crediting\n");
print_r($accounts);
$account1->debit(200);
$account2->debit(400);
$account3->debit(800);
print("\nAfter Debiting\n");
print_r($accounts);
$sorted_array = Bank::sortByProperty($accounts,'accountName');
print("\n After Sorting\n");
print_r($sorted_array);
$search_array = Bank::searchByName($accounts,'accountName','Bharat');
print("\n After Searching\n");
print_r($search_array);

