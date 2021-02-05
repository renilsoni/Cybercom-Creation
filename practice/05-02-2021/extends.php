<?php

class BankAccount {
    public $balance = 0;
    public $type = '18-25';

    public function SetType($input) {
        $this->type = $input;
    }

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

class SavingAccount extends BankAccount {
    
}

$renil = new BankAccount;
$renil->Deposit(100);
$renil->Withdraw(10);
echo $renil->DisplayBalance();
//echo $renil->type;
$renil->SetType('18-30');
echo '<br>'.$renil->type;

echo '<br><br>';   

$renil_saving = new SavingAccount;
$renil_saving->Deposit(500);
$renil->Withdraw(50);
echo $renil_saving->DisplayBalance();
$renil_saving->SetType('Saving');
echo '<br>'.$renil_saving->type;
//echo $renil_saving->type;
?>