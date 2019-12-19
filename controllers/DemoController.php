<?php
/**
 * Created by PhpStorm.
 * User: ClassUser
 * Date: 02.10.2019
 * Time: 11:07
 */

namespace app\controllers;



use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class DemoController extends Controller
{
    public function actionXml(){

        \Yii::$app->response->format = \yii\web\Response::FORMAT_XML;
        $items = ['some', 'array', 'of', 'data' => ['associative', 'array']];
        return $items;

        Yii::$app->guestbook->format = \yii\web\Response::FORMAT_XML;
        $items = ['some', 'array', 'of', 'data' => ['associative', 'array']];
        return $items;
}
}