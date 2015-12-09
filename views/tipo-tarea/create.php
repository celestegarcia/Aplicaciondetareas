<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TipoTarea */

$this->title = 'Create Tipo Tarea';
$this->params['breadcrumbs'][] = ['label' => 'Tipo Tareas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipo-tarea-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
