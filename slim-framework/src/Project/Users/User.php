<?php

namespace Project\Users;

class User
{
    public $id;
    public $username;
    public $mail;
    public $password;
    public $name;
    public $description;
    public $image;
    public $posts;

    public function __construct($id,$password, $username, $mail,$name,$description,$image, $posts)
    {
        $this->id = $id;
        $this->mail = $mail;
        $this->username = $username;
        $this->password = $password;
        $this->name = $name;
        $this->description = $description;
        $this->image = $image;
        $this->posts = $posts;
    }
}