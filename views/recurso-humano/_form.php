<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;

/* @var $this yii\web\View */
/* @var $model app\models\RecursoHumano */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="recurso-humano-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idrecurso_humano')->textInput() ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'puesto')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'area')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'edad')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'antiguedad')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fotografia')->widget(FileInput::classname(), [
    'options' => ['accept' => 'image/*'],  ]); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
