<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TareasHasRecursoHumano */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tareas-has-recurso-humano-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tareas_idtareas')->textInput() ?>

    <?= $form->field($model, 'recurso_humano_idrecurso_humano')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
