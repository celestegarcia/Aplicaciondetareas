<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tareas_has_recurso_humano".
 *
 * @property integer $tareas_idtareas
 * @property integer $recurso_humano_idrecurso_humano
 *
 * @property Tareas $tareasIdtareas
 * @property RecursoHumano $recursoHumanoIdrecursoHumano
 */
class TareasHasRecursoHumano extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tareas_has_recurso_humano';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tareas_idtareas', 'recurso_humano_idrecurso_humano'], 'required'],
            [['tareas_idtareas', 'recurso_humano_idrecurso_humano'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'tareas_idtareas' => 'Tareas Idtareas',
            'recurso_humano_idrecurso_humano' => 'Recurso Humano Idrecurso Humano',
        ];
    }

    /*
 *    * @return \yii\db\ActiveQuery
     */
    public function getTareasIdtareas()
    {
        return $this->hasOne(Tareas::className(), ['idtareas' => 'tareas_idtareas']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRecursoHumanoIdrecursoHumano()
    {
        return $this->hasOne(RecursoHumano::className(), ['idrecurso_humano' => 'recurso_humano_idrecurso_humano']);
    }
}
