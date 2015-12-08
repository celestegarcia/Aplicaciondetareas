<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TareasHasRecursoHumano */

$this->title = 'Update Tareas Has Recurso Humano: ' . ' ' . $model->tareas_idtareas;
$this->params['breadcrumbs'][] = ['label' => 'Tareas Has Recurso Humanos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tareas_idtareas, 'url' => ['view', 'tareas_idtareas' => $model->tareas_idtareas, 'recurso_humano_idrecurso_humano' => $model->recurso_humano_idrecurso_humano]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tareas-has-recurso-humano-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
