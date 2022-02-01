<?php
namespace app\models;
use yii\base\Model;


class FormularioForm extends Model
{
    public $valora;
    public $valorb;


    public function rules()
    {
       return[
           [['valora','valorb'],'requeried'],
           ['valora','number'],['valorb','number']


       ];
    }
}


?>