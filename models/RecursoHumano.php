<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "recurso_humano".
 *
 * @property integer $idrecurso_humano
 * @property string $nombre
 * @property string $puesto
 * @property string $area
 * @property string $edad
 * @property string $antiguedad
 * @property resource $fotografia
 *
 * @property TareasHasRecursoHumano[] $tareasHasRecursoHumanos
 * @property Tareas[] $tareasIdtareas
 */
class RecursoHumano extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'recurso_humano';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idrecurso_humano'], 'required'],
            [['idrecurso_humano'], 'integer'],
            [['fotografia'], 'string'],
            [['nombre', 'puesto', 'area', 'edad', 'antiguedad'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idrecurso_humano' => 'Idrecurso Humano',
            'nombre' => 'Nombre',
            'puesto' => 'Puesto',
            'area' => 'Area',
            'edad' => 'Edad',
            'antiguedad' => 'Antiguedad',
            'fotografia' => 'Fotografia',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTareasHasRecursoHumanos()
    {
        return $this->hasMany(TareasHasRecursoHumano::className(), ['recurso_humano_idrecurso_humano' => 'idrecurso_humano']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTareasIdtareas()
    {
        return $this->hasMany(Tareas::className(), ['idtareas' => 'tareas_idtareas'])->viaTable('tareas_has_recurso_humano', ['recurso_humano_idrecurso_humano' => 'idrecurso_humano']);
    }
}
