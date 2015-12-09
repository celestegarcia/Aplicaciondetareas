<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TipoTarea;

/**
 * TipoTareaSearch represents the model behind the search form about `app\models\TipoTarea`.
 */
class TipoTareaSearch extends TipoTarea
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idtipo_tarea', 'tareas_idtareas'], 'integer'],
            [['nombre', 'descripcion'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = TipoTarea::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'idtipo_tarea' => $this->idtipo_tarea,
            'tareas_idtareas' => $this->tareas_idtareas,
        ]);

        $query->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'descripcion', $this->descripcion]);

        return $dataProvider;
    }
}
