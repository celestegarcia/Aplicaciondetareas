<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TareasHasRecursoHumanoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tareas Has Recurso Humanos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tareas-has-recurso-humano-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tareas Has Recurso Humano', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'tareas_idtareas',
            'recurso_humano_idrecurso_humano',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
