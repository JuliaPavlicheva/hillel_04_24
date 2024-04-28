<?php

require_once __DIR__ . '/BankAccount.php';

try {
    $bank_account = new BankAccount('dghDF3784', 1000);
//    $bank_account->set_id("1");
//    $bank_account->set_balance(5);
//    var_dump($bank_account->get_id());
//    var_dump($bank_account->get_balance());
//    $bank_account->deposit(100);
//    $bank_account->withdraw(10000);

    var_dump($bank_account);
} catch (Exception $exception) {
    echo $exception->getMessage() . PHP_EOL;
} finally {
    echo 'Finally!' . PHP_EOL;
}

