<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tareas".
 *
 * @property integer $idtareas
 * @property string $nombre
 * @property string $descripcion
 * @property string $fecha_inicio
 * @property string $fecha_fin
 *
 * @property TareasHasRecursoHumano[] $tareasHasRecursoHumanos
 * @property TipoTarea[] $tipoTareas
 */
class Tareas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tareas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idtareas'], 'required'],
            [['idtareas'], 'integer'],
            [['fecha_inicio', 'fecha_fin'], 'safe'],
            [['nombre', 'descripcion'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idtareas' => 'Idtareas',
            'nombre' => 'Nombre',
            'descripcion' => 'Descripcion',
            'fecha_inicio' => 'Fecha Inicio',
            'fecha_fin' => 'Fecha Fin',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTareasHasRecursoHumanos()
    {
        return $this->hasMany(TareasHasRecursoHumano::className(), ['tareas_idtareas' => 'idtareas']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTipoTareas()
    {
        return $this->hasMany(TipoTarea::className(), ['tareas_idtareas' => 'idtareas']);
    }
}
