<?php

namespace portalium\template\controllers\frontend;

use portalium\web\Controller as WebController;

class DefaultController extends WebController
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}