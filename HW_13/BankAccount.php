<?php

class BankAccount
{
    private int $accountNumber;
    private int $balance;
    private int $userValue;

    public function __construct(int $accountNumber, int $balance)
    {
        $this->setAccountNumber($accountNumber);
        $this->setBalance($balance);
    }

    private function setAccountNumber(int $accountNumber)
    {
        if($accountNumber === null || $accountNumber <= 0)
        {
            throw new Exception("incorrect $accountNumber");
        }
            $this->accountNumber = $accountNumber;
    }

    private function setBalance(int $balance)
    {
        if($balance === null || $balance <= 0)
        {
            throw new Exception("incorrect $balance");
        }
            $this->balance = $balance;
    }

    private function getAccountNumber(): int
    {
        return $this->accountNumber;
    }
    private function getBalance(): int
    {
        return $this->balance;
    }
    public function setUserValue($userValue)
    {
        if($userValue === null || $userValue <= 0)
        {
            throw new Exception("incorrect $userValue");
        }
            $this->userValue = $userValue;

    }
    protected function setUserValueMinus($userValue)
    {
        $balans = $this->getBalance();
        if($userValue === null || $userValue <= 0 || $balans < $userValue)
        {
            throw new Exception("incorrect $userValue");
        }
            $this->userValue = $userValue;

    }

    public function getUserValue(): int
    {
        return $this->userValue;
    }

    public function AddMoney(int $userValue): int
    {
        $this->setUserValue($userValue);
        $user = $this->getUserValue();

        $balance = $this->getBalance();

        $newBalanc = $user + $balance;
        $this->setBalance($newBalanc);
        return $this->getBalance();
    }

    public  function MinusMoney(int $userValue): int
    {
        $this->setUserValueMinus($userValue);
        $user = $this->getUserValue();

        $balance = $this->getBalance();

        $newBalanc = $balance - $user;
        $this->setBalance($newBalanc);
        return $this->getBalance();
    }
}