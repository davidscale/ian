<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<?php
if($mensaje){
    echo Html::tag('div',Html::encode($mensaje), ['calss'=>'alert alert-danger']);
}

?>

<?php $formulario=ActiveForm::begin(); ?>

<?= $formulario->field($model,'valora') ?>

<?= $formulario->field($model,'valorb') ?>

<div class="form-group">

<?= html::submitButton('Enviar',['class'=>'btn btn-primary']) ?>

</div>

<?php Activeform::end(); ?>