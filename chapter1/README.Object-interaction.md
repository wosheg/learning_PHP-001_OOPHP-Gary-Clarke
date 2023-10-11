# learning_PHP-001_OOPHP-Gary-Clarke
Udemy - The Complete Object Oriented PHP Developer Course 2022-9

@Gary Clarke

## 1. Introduction To Object Oriented PHP

### 1.5. Object Interaction and Composition

Наконец, мы собираемся рассмотреть взаимодействие объектов.

Давайте рассмотрим музыкальный сервис, который позволяет создавать плэйлисты для прослушивания отобранной музыки.

И угадайте что? Плэйлист - это объект.

**Playlist is a object**

В плэйлисте содержатся песни, которые тоже являются объектами.

**Song object**

И мы можем как добавлять новые песни в плэйлист, так и удалять их.

Давайте попробуем создать объект песни и добавить его в объект списка воспроизведения.

Итак, во-первых, нам нужно создать класс песни, создать общедоступные свойства идентификатора песни и названия, создать экземпляр класс и посмотреть результат в браузере.

```php
// Create a Song class
// Create songId and title public properties
// Instantiate an "Octopus's Garden" song using the new keyword
// var_dump() and check in the browser
```

Вот моё решение:

```php
// Create a Song class
class Song
{
    // Create songId and title public properties
    public $songId;
    public $title;
}

// Instantiate an "Octopus's Garden" song using the new keyword
$octopusSong = new Song();
$octopusSong->songId = 1;
$octopusSong->title = "Octopus's Garden";

// var_dump() and check in the browser
var_dump($octopusSong);
```
Если мы вернёмся к плэйлисту, то увидим его название и список песен содержащихся в нём.

**Composition**

И мы называем это **Композицией**, потому что песня - это объект и плэйлист - это объект и мы можем вложить объект песни в объект плэйлиста.
И если подумать об этом, какие возможности открываются перед нами и они огромны!

Давайте теперь создадим класс и объект плэйлиста.
Я собираюсь дать ему два свойства: название и пустой массив песен.

```php
class Playlist
{
    public $name;
    public $songs = [];
}

$playlist = new Playlist();
var_dump($playlist->songs);
```
Теперь создадим метод, который будет добавлять в массив песни.
```php
    public function addSong($song)
    {
        $this->songs[] = $song;
    }
```
```php
$playlist = new Playlist();
$playlist->name = 'Rock';
$playlist->addSong($octopusSong);
var_dump($playlist);
```

Теперь ваша очередь!
##### Домашнее задание
1. Instantiate a song object of your favourite song
2. Set songId and title
3. Add the song to the Rock playlist