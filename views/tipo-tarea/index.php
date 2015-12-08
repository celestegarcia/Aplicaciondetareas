<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TipoTareaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tipo Tareas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipo-tarea-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tipo Tarea', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idtipo_tarea',
            'nombre',
            'descripcion',
            'tareas_idtareas',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
