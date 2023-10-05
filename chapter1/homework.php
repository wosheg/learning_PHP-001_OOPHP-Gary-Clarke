<?php

class  User
{
    public $name;
    public $username;
    public $followerCount;
}

// Homework

// 1. Instantiate a new User object named after yourself
$ivanObject = new User();
// 2. Set name, username, and followerCount properties
$ivanObject->name = 'Ivan Z.';
$ivanObject->username = '@wosheg';
$ivanObject->followerCount = 1;
// 3. Use print_r() to check that you have created it correctly
print_r($ivanObject);
// 4. Check your work in the browser