# learning_PHP-001_OOPHP-Gary-Clarke
Udemy - The Complete Object Oriented PHP Developer Course 2022-9

@Gary Clarke

## 1. Introduction To Object Oriented PHP

### 1.4. Methods

В предыдущем уроке мы рассмотрели, что такое объекты и установили, что они могут содержать фрагменты данных, называемыми **свойствами/атрибутами**.
В этом уроке мы рассмотрим функциональность объекта, когда к нему добавляются функции, которые мы называем **методами**.
И это то, чем мы собираемся заниматься на этом уроке.

Рассмотрим оформление заказа в корзине интернет-магазина.
Мы увидим там стоимость товара, а также расходы по его доставке.

Итак, попробуйте выполнить следующее:
```php
// 1. Create a Basket class
// 2. Add itemsTotal and shippingCost public properties
// 3. Instantiate a Basket using the new keyword
// 4. Set values for both properties
// 5. Use var_dump() and check your work in the browser
// (localhost:8000/defining-methods.php)
```

Вот моё решение:
```php
// 1. Create a Basket class
class Basket
{
    // 2. Add itemsTotal and shippingCost public properties
    public $itemTotal;
    public $shippingCost;
}

// 3. Instantiate a Basket using the new keyword
$basket = new Basket();
// 4. Set values for both properties
$basket->itemTotal = 50;
$basket->shippingCost = 10;
// 5. Use var_dump() and check your work in the browser
var_dump($basket);
// (localhost:8000/defining-methods.php)
```

У нас есть корзина и пара свойств, давайте придадим ей функциональность для расчёта промежуточного итога с использованием этих свойств.

Создадим публичную функцию **calculateSubTotal**:
```php
public function calculateSubTotal()
{
    $subTotal = $this->itemTotal + $this->shippingCost;

    return $subTotal;
}
```
Чтобы получить доступ к свойствам внутри метода мы используем ключевое слово **$this**.
Чтобы вернуть значение из метода, используется ключевое слово **return**.
Если мы вызовем метод из созданного объекта, то в браузере увидим цифру 60:
```php
var_dump($basket->calculateSubTotal());
```
Теперь ваша очередь.
##### Домашнее задание
Я хочу, чтобы вы добавили общедоступное свойство **discount** и переписали метод расчета промежуточного итога, в котором вычиталась бы скидка.
1. Add a public discount property.
2. Rewrite **calculateSubTotal()** so that discount is deducted.
3. Set a discount value of 30.
4. Dump and check that the browser displays the correct subtotal.
