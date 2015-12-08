<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TareasHasRecursoHumano */

$this->title = $model->tareas_idtareas;
$this->params['breadcrumbs'][] = ['label' => 'Tareas Has Recurso Humanos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tareas-has-recurso-humano-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'tareas_idtareas' => $model->tareas_idtareas, 'recurso_humano_idrecurso_humano' => $model->recurso_humano_idrecurso_humano], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'tareas_idtareas' => $model->tareas_idtareas, 'recurso_humano_idrecurso_humano' => $model->recurso_humano_idrecurso_humano], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'tareas_idtareas',
            'recurso_humano_idrecurso_humano',
        ],
    ]) ?>

</div>
