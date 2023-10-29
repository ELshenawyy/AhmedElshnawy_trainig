<?php
class Account {
    private $id;
    private $name;
    private $balance;

    public function __construct($id, $name, $balance = 0) {
        $this->id = $id;
        $this->name = $name;
        $this->balance = $balance;
    }

    public function getID() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getBalance() {
        return $this->balance;
    }

    public function credit($amount) {
        $this->balance += $amount;
    }

    public function debit($amount) {
        if ($amount <= $this->balance) {
            $this->balance -= $amount;
        } else {
            echo "Insufficient balance to debit.\n";
        }
    }

    public function transferTo($anotherAccount, $amount) {
        if ($amount <= $this->balance) {
            $this->debit($amount);
            $anotherAccount->credit($amount);
        } else {
            echo "Insufficient balance to transfer.\n";
        }
    }

    public function __toString() {
        return "Account[ID=" . $this->id . ", Name=" . $this->name . ", Balance=" . $this->balance . "]";
    }
}

?>