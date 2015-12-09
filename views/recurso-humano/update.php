<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\RecursoHumano */

$this->title = 'Update Recurso Humano: ' . ' ' . $model->idrecurso_humano;
$this->params['breadcrumbs'][] = ['label' => 'Recurso Humanos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idrecurso_humano, 'url' => ['view', 'id' => $model->idrecurso_humano]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="recurso-humano-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
