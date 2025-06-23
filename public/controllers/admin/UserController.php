<?php

namespace app\controllers\admin;

use app\controllers\AppController;

class UserController extends AppController
{
    public function actionIndex($id = ' ')
    {
       return $this->render("index");
    }
}
