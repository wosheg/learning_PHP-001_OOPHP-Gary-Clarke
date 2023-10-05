# learning_PHP-001_OOPHP-Gary-Clarke
Udemy - The Complete Object Oriented PHP Developer Course 2022-9

@Gary Clarke

## 1. Introduction To Object Oriented PHP

### 1.3. Creating Objects

1. Что такое объекты?
2. Как мы их создаём?

По своей сути, вы сталкиваетесь с объектами постоянно. Любой сайт, приложение состоит из тысяч различных объектов.
Например, заходя в свой аккаунт интернет-магазина вы увидите себя как покупателя и это объект:

**A Customer is an object**

Вы также увидите свою корзину и это тоже объект:

**A Basket is an object**

Продукты в каталоге - это тоже объекты.

**A Product is an object**

Эти объекты представляют собой различные данные.

Красота объектно-ориентированного программирования заключается в том, что мы можем взять объекты, дать им характеристики и способности что-либо делать.

Как покупатель, являющийся объектом, я могу выбрать товар и положить его в корзину.
Все имена продуктов, характеристик и функциональные возможности связаны с объектом.

**A Customer**
(object 1)

**can add a Product**
(object 2)

**to a Basket**
(object 3)

Давайте воспроизведем объект нашего профайла в X (Twitter).
Мы видим, что данный объект наделен такими характеристиками как имя, никнейм, число подписчиков.
Данные характеристики в PHP часто называют **свойствами** или **свойствами класса**, в других ООП языках их называют **атрибутами**. Оба названия обозначают одно и то же.

**USER**

__name__

__username__

__bio__

__location__

__join_date__

Давайте приступим к практике!

Смотри файлы /chapter1/creating-objects.php

Откуда берутся объекты? Для создания объектов нам нужен класс. Класс - это проект, форма. Это спецификация, которая сообщает нам, какие характеристики и какую функциональность должны иметь наши объекты.

Класс создаётся следующим образом, у нас есть ключевое слово **class** (в нашем случае - пользователь), далее мы пишем его название в верхнем регистре **User** и ставим открывающую и закрывающую фигурные скобки:
```php
class User
{
    // Create properties
}
```
Чтобы задать свойство класса, добавьте ключевое слово видимости, оно может быть общедоступным (**public**), защищенным (**protected**) или частным (**private**) за которым следует имя переменной.
Мы пока будем использовать только **public**.
```php
class User
{
    // Create properties
    public $name;
    public $username;
    public $followerCount;
}
```
Теперь давайте создадим объект из этого класса.
Обычно вы не создаете объекты в том же файле с классом, но для примера мы сделаем это.
```php
$garyObject = new User();
```
Для создания объекта, я использую ключевое слово **new**, затем название класса **User** и круглые скобки, которые в данном случае не обязательны.
Это конструкция создает объект, который присваивается переменной $garyObject.

Это действие можно назвать "**созданием объекта**" или "**созданием экземпляра класса**".

Давайте рассмотрим этот объект, распечатав его при помощи функции **print_r()**.
```php
$garyObject = new User();
print_r($garyObject);
```
Чтобы запустить пример, перейдите в папку /chapter1/ и запустите встроенный в PHP веб-сервер:
```shell
php -S localhost:8000
```
И откройте в браузере файл:
http://localhost:8000/creating-objects.php

Вы увидите объект с указанными свойствами:
```
User Object ( [name] => [username] => [followerCount] => ) 
```
Но это не очень полезно, потому что мы не присволи нашим свойствам каких-либо значений.
Давайте сделаем это. Для обращения к свойствам и методам класса используют оператор объекта ``->``:
```php
$garyObject = new User();
$garyObject->name = 'Gary Clarke';
$garyObject->username = '@garyclarketech';
$garyObject->followerCount = 50;
print_r($garyObject);
```
Вернемся в браузер и посмотрим:
```
User Object ( [name] => Gary Clarke [username] => @garyclarketech [followerCount] => 50 ) 
```
Теперь настала ваша очередь.
##### Домашнее задание
1. Instantiate a new User object named after yourself
2. Set name, username, and followerCount properties
3. Use print_r() to check that you have created it correctly
4. Check your work in the browser

###### Пример решения
```php
// 1. Instantiate a new User object named after yourself
$johnObject = new User();
// 2. Set name, username, and followerCount properties
$johnObject->name = 'John Smith';
$johnObject->username = '@johnsmith';
$johnObject->followerCount = 1000;
// 3. Use print_r() to check that you have created it correctly
print_r($johnObject);
// 4. Check your work in the browser
```