<?php

namespace app\controllers;

use app\models\User;

class MyController extends AppController
{

    public $layout ="basic";
    public function actionIndex($id = 'Hello, Shall!')
    {
        $user = new User();
        $hi = "Hello, world!";
        $names = ['Ivanov', "Petrov", "Sidorov"];
        return $this->render("index", compact('hi',  'id', 'names'));
    }
}