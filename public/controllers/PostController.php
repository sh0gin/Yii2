<?php

namespace app\controllers;

use app\models\Category;
use Yii;

use app\models\TestForm;

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

        $model = new TestForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($model->validate()) {
                Yii::$app->session->setFlash('success', 'Данные приняты');
                return $this->refresh();
            } else {
                Yii::$app->session->setFlash('error', 'Ошибка');

            }
        }



        return $this->render('index', compact('model'));
    }

    public function actionShow() {

        // $this->layout = 'basic';


        // $cats = Category::find()->asArray()->where(['role' => 1])->all();
        // $cats = Category::find()->asArray()->where(['like', 'role', 1])->all();
        // $cats = Category::find()->asArray()->where(['role' => 1])->limit(1)->all();
        // $cats = Category::find()->asArray()->where(['role' => 1])->one();
        // $cats = Category::find()->asArray()->where(['role' => 1])->limit(1)->all();
        // $cats = Category::findOne(['role' => 1 ]);
        // $cats = Category::findAll(['role' => 1 ]);

        $query = "SELECT * FROM user WHERE role ='1'";
        $cats = Category::findBySql($query)->all();
        return $this->render("show", compact('cats'));
    }
}
