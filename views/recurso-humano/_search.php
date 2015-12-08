<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RecursoHumanoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="recurso-humano-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idrecurso_humano') ?>

    <?= $form->field($model, 'nombre') ?>

    <?= $form->field($model, 'puesto') ?>

    <?= $form->field($model, 'area') ?>

    <?= $form->field($model, 'edad') ?>

    <?php // echo $form->field($model, 'antiguedad') ?>

    <?php // echo $form->field($model, 'fotografia') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
