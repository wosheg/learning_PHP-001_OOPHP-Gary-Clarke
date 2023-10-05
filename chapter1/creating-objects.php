<?php

class  User
{
    public $name;
    public $username;
    public $followerCount;
}

$garyObject = new User();
$garyObject->name = 'Gary Clarke';
$garyObject->username = '@garyclarketech';
$garyObject->followerCount = 50;
print_r($garyObject);

// Homework

// 1. Instantiate a new User object named after yourself
$johnObject = new User();
// 2. Set name, username, and followerCount properties
$johnObject->name = 'John Smith';
$johnObject->username = '@johnsmith';
$johnObject->followerCount = 1000;
// 3. Use print_r() to check that you have created it correctly
print_r($johnObject);
// 4. Check your work in the browser