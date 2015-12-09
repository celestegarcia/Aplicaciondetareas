<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\TareasHasRecursoHumano */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tareas-has-recurso-humano-form">

    <?php $form = ActiveForm::begin(); ?>

   <?= $form->field($model, 'tareas_idtareas')->dropDownList(ArrayHelper::map(\app\models\Tareas::find()->asArray()->all(),'idtareas' ,'nombre'), 
    		['prompt'=>'Selecciona']); ?>

    <?= $form->field($model, 'recurso_humano_idrecurso_humano')->dropDownList(ArrayHelper::map(\app\models\RecursoHumano::find()->asArray()->all(),'idrecurso_humano' ,'nombre'), 
    		['prompt'=>'Selecciona']); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
