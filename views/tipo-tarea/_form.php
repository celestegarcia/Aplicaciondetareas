<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\TipoTarea */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tipo-tarea-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idtipo_tarea')->textInput() ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'descripcion')->textInput(['maxlength' => true]) ?>

    <?= 
    $form->field($model, 'tareas_idtareas')->dropDownList(
    		ArrayHelper::map(\app\models\Tareas::find()->asArray()->all(),'idtareas' ,'nombre'), 
    		['prompt'=>'Selecciona']
    	);

     ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
