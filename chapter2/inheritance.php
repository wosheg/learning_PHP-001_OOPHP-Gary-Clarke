<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>inheritance</title>
</head>
<body>
<?php
    require 'PremiumCheckingAccount.php';

    $premiumCheckingAccount = new PremiumCheckingAccount();
    $premiumCheckingAccount->deposit(20);
    $premiumCheckingAccount->withdraw(10);
    $premiumCheckingAccount->transfer(100);
    echo $premiumCheckingAccount->minimumBalance;
?>
</body>
</html>
