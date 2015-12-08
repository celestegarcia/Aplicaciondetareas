<?php

namespace app\models;
use app\models\TipoTarea;
use Yii;

/**
 * This is the model class for table "tipo_tarea".
 *
 * @property integer $idtipo_tarea
 * @property string $nombre
 * @property string $descripcion
 * @property integer $tareas_idtareas
 *
 * @property Tareas $tareasIdtareas
 */
class TipoTarea extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tipo_tarea';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idtipo_tarea', 'tareas_idtareas'], 'required'],
            [['idtipo_tarea', 'tareas_idtareas'], 'integer'],
            [['nombre', 'descripcion'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idtipo_tarea' => 'Idtipo Tarea',
            'nombre' => 'Nombre',
            'descripcion' => 'Descripcion',
            'tareas_idtareas' => 'Tareas Idtareas',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTareasIdtareas()
    {
        return $this->hasOne(Tareas::className(), ['idtareas' => 'tareas_idtareas']);
    }

    public function getTipo()
    {
        $tipo = TipoTarea;
        return $this->hasOne(Tareas::className(), ['idtareas' => 'tareas_idtareas']);
    }
}
