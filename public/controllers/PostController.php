<?php

namespace app\controllers;

use Yii;

class PostController extends AppController
{
    public $layout = 'basic';

    public function actionIndex()
    {
        $names = ['Ivanov', "Petrov", "Sidorov"];
        
        if (yii::$app->request->isAjax) {
            debug($_POST);
            return 'test';
        }

        return $this->render('index');
    }

    public function actionShow() {

        // $this->layout = 'basic';

        return $this->render("show");
    }
}
