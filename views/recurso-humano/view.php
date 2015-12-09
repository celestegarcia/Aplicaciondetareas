<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\RecursoHumano */

$this->title = $model->idrecurso_humano;
$this->params['breadcrumbs'][] = ['label' => 'Recurso Humanos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="recurso-humano-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idrecurso_humano], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idrecurso_humano], [
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
            'idrecurso_humano',
            'nombre',
            'puesto',
            'area',
            'edad',
            'antiguedad',
            'fotografia',
        ],
    ]) ?>

</div>
