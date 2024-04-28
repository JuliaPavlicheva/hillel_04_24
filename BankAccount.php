<?php

class BankAccount
{
    private string $account_id;

    private float $account_balance;

    /**
     * @throws Exception
     */
    public function __construct(string $account_id, float $account_balance = 0) {
        $this->set_id($account_id);
        $this->set_balance($account_balance);
    }

    /**
     * @throws Exception
     */
    public function set_id(string $account_id): void
    {
        if (strlen($account_id) < 8) {
            throw new Exception("Invalid Account Id!");
        }
        $this->account_id = $account_id;
    }

    /**
     * @throws Exception
     */
    public function set_balance(float $account_balance): void
    {
        if ($account_balance < 1) {
            throw new Exception("Account Balance must be greater than 0!");
        }
        $this->account_balance = $account_balance;
    }

    /**
     * @return string
     */
    public function get_id(): string
    {
        return $this->account_id;
    }

    /**
     * @return float
     */
    public function get_balance(): float
    {
        return $this->account_balance;
    }

    /**
     * @throws Exception
     */
    public function deposit(float $amount_to_add): void
    {
        if ($amount_to_add < 1) {
            throw new Exception("Amount must be greater than 0!");
        }
        $this->account_balance += $amount_to_add;
    }

    /**
     * @throws Exception
     */
    public function withdraw(float $amount_to_withdraw): void
    {
        if ($amount_to_withdraw < 1 || $amount_to_withdraw > $this->account_balance) {
            throw new Exception("Please enter valid amount to withdraw!");
        }
        $this->account_balance -= $amount_to_withdraw;
    }

    public function __destruct()
    {
    }
}