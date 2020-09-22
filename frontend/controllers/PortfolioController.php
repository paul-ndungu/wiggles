<?php

namespace frontend\controllers;

class PortfolioController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
 public function actionPortfoliogrid()
    {
        return $this->render('portfoliogrid');
    }
  public function actionPortfoliogrid2()
    {
        return $this->render('portfoliogrid2');
    } 
    public function actionPortfoliowide()
        {
        return $this->render('portfoliowide');
    }   
    public function actionPortfoliodetails()
        {
        return $this->render('portfoliodetails');
    }   
}
