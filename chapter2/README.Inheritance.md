# learning_PHP-001_OOPHP-Gary-Clarke
Udemy - The Complete Object Oriented PHP Developer Course 2022-9

@Gary Clarke

## 2. Object Oriented Programming Principles and Concepts Part 1

### 2.2. Inheritance

Одним из способов, с помощью которого объекты делают программу более эффективной, является возможность использовать один класс в качестве основы для других классов.

Другими словами, объекты и классы могут наследоваться от родителей, наследовать атрибуты от родителей.
Точно так же, как люди могут наследовать атрибуты от родителей.

Эти атрибуты, с нашей точки зрения, являются объектом или программой, и мы их уже видели.

Это свойства и методы.

И вот что мы собираемся сделать на этом занятии.
Мы собираемся взять этот класс учетной записи и расширить его дочерними классами, которые наследуют его свойства и методы.

Итак, вот наш класс снова, и мы собираемся расширить его с помощью текущего счета.

Как видите, текущий счет наследует все базовые свойства и методы без необходимости явно объявлять их, когда мы фактически создаем класс.
Но не только это: текущий счет может затем объявлять свои собственные свойства и методы.
Например, у него может быть метод передачи, который может быть уникальным для текущего счета.
Другие учетные записи могут не иметь этой функции.

Таким образом, мы говорим, что он унаследует все базовые функции родителя, но может также иметь небольшие характеристики, свойства и методы, которые также делают его уникальным.

Давайте приступим и создадим класс счета:
```php
class Account
{
    public $accountNumber;
    public $balance;

    public function deposit($amount)
    {
        echo 'Depositing ' . $amount . '<br>';
    }

    public function withdraw($amount)
    {
        echo 'Withdrawing ' . $amount . '<br>';
    }

    public function getBalance()
    {
        return $this->balance;
    }
}
```
Теперь создадим файл для демонстрации _inheritance.php_
```php
<?php
    require 'Account.php';

    $account = new Account();
    $account->deposit(20);
    $account->withdraw(10);
?>
```
Теперь создадим дочерний класс счета, который я назову текущим счетом _CheckingAccount_
Для расширения класса необходимо использовать ключевое слово **extends** и написать родительский класс.
```php
require 'Account.php';
class CheckingAccount extends Account
{

}
```
Нам фактически не нужно писать те свойства и методы, которые уже есть в родительском классе.
Следующий код будет работать одинаково с предыдущим:
```php
<?php
    require 'CheckingAccount.php';

    $checkingAccount = new CheckingAccount();
    $checkingAccount->deposit(20);
    $checkingAccount->withdraw(10);
?>
```
Теперь добавим уникальный для текущего счета метод **transfer()**:
```php
    public function transfer($amount)
    {
        echo 'Transferring ' . $amount . '<br>';
    }

$checkingAccount->transfer(100);
```
Другие счета могут не иметь добавленной функциональности.

Проверим, что все работает:
```php
<?php
    require 'CheckingAccount.php';

    $checkingAccount = new CheckingAccount();
    $checkingAccount->deposit(20);
    $checkingAccount->withdraw(10);
    $checkingAccount->transfer(100);
?>
```
Вы должны понять, что нет ограничений на уровни наследования.
Мы можем отнаследоваться от **CheckingAccount** и создать новые классы,
например **PremiumCheckingAccount** и **RegularCheckingAccount** и т.д.

И это будет твоей домашней работой.
##### Домашнее задание

1. Create a PremiumCheckingAccount class which extends CheckingAccount
2. Give it a public $minimumBalance property with a default value
3. Echo out $premiumCheckingAccount->minimumBalance in inheritance.php
4. Call all of the methods which it inherits