<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TareasHasRecursoHumano */

$this->title = 'Create Tareas Has Recurso Humano';
$this->params['breadcrumbs'][] = ['label' => 'Tareas Has Recurso Humanos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tareas-has-recurso-humano-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
