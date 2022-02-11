<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessController;
use yii\web\Controller;

class SitioController extends Controller
{
  public function actionInicio()
  {
      $model = new FormularioForm;
    
    if( $model->load(Yii::$app->request->post())&& $model->validate())
    {
        $valorRespuesta= ("el resultado es:".$model->valora+$model->valorb);

        return $this->$this->render('inicio',['mensaje'=>$valorRespuesta,'model'=>$model] );
    }

    return $this->render('inicio',['mensaje'=>"",'model'=>$model]);

  }

}

?>