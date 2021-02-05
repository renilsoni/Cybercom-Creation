<?php

class BankAccount {
    public $balance = 0;
    //private $balance = 105.5;
    //protected $balance = 105.5;

    public function DisplayBalance() {
        return 'Balance : '.$this->balance;
    }

    public function Withdraw($amount) {
        if ($amount > $this->balance)  {
            echo "Not Enough Balance.<br>";
        } else {
            $this->balance = $this->balance - $amount;
        }
    }

    public function Deposit($amount) {
        $this->balance = $this->balance + $amount;
    }
}

// new instance of class
//$renil = new BankAccount;
//$renil->Withdraw(500); // withdraw 5 rupees from current balance
//echo $renil->DisplayBalance(); // display balance
//echo $renil->balance;

$renil = new BankAccount;
$vaibhav = new BankAccount;

$renil->Deposit(100);
$vaibhav->Deposit(50);

echo $renil->DisplayBalance().'<br>';
echo $vaibhav->DisplayBalance();
echo '<br><br>';
$renil->Withdraw(50);
$vaibhav->Withdraw(10);

echo $renil->DisplayBalance().'<br>';
echo $vaibhav->DisplayBalance();

// Private & Protected variable can't access outside the class
// Private & Protected variable access using function

?>
