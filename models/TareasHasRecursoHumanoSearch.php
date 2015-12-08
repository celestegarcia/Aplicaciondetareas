<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TareasHasRecursoHumano;

/**
 * TareasHasRecursoHumanoSearch represents the model behind the search form about `app\models\TareasHasRecursoHumano`.
 */
class TareasHasRecursoHumanoSearch extends TareasHasRecursoHumano
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tareas_idtareas', 'recurso_humano_idrecurso_humano'], 'integer'],
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
        $query = TareasHasRecursoHumano::find();

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
            'tareas_idtareas' => $this->tareas_idtareas,
            'recurso_humano_idrecurso_humano' => $this->recurso_humano_idrecurso_humano,
        ]);

        return $dataProvider;
    }
}
