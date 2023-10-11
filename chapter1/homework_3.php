<?php

class Song
{
    public $songId;
    public $title;
}

class Playlist
{
    public $name;
    public $songs = [];

    public function addSong($song)
    {
        $this->songs[] = $song;
    }
}

$octopusSong = new Song();
$octopusSong->songId = 1;
$octopusSong->title = "Octopus's Garden";

$yellowSubmarine = new Song();
$yellowSubmarine->songId = 2;
$yellowSubmarine->title = "Yellow Submarine";

$playlist = new Playlist();
$playlist->name = 'Rock';
$playlist->addSong($octopusSong);
$playlist->addSong($yellowSubmarine);
var_dump($playlist);