<?php

 namespace frontend\controllers;
 use yii\web\Controller;

 class TrackController extends Controller
 {
    public function actionIndex(){
        return $this->render('index');
    }
 }