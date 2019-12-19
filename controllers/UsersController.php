<?php

namespace app\controllers;
use app\models\Order;

class UsersController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionOrder() {
        $order = new Order();
        //$order_sql = $order::findOne(['id_order'=>1]);
        echo '<pre>';
        print_r( $order -> getOrderItems() );
        echo '</pre>';
    }

}
