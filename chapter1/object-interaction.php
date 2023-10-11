<?php

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
//var_dump($octopusSong);

class Playlist
{
    public $name;
    public $songs = [];

    public function addSong($song)
    {
        $this->songs[] = $song;
    }
}

$playlist = new Playlist();
$playlist->name = 'Rock';
$playlist->addSong($octopusSong);
var_dump($playlist);