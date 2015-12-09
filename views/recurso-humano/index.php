<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\RecursoHumanoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Recurso Humanos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="recurso-humano-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Recurso Humano', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idrecurso_humano',
            'nombre',
            'puesto',
            'area',
            'edad',
            // 'antiguedad',
            // 'fotografia',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
