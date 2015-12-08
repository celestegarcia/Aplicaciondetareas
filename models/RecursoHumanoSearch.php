<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\RecursoHumano;

/**
 * RecursoHumanoSearch represents the model behind the search form about `app\models\RecursoHumano`.
 */
class RecursoHumanoSearch extends RecursoHumano
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idrecurso_humano'], 'integer'],
            [['nombre', 'puesto', 'area', 'edad', 'antiguedad', 'fotografia'], 'safe'],
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
        $query = RecursoHumano::find();

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
            'idrecurso_humano' => $this->idrecurso_humano,
        ]);

        $query->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'puesto', $this->puesto])
            ->andFilterWhere(['like', 'area', $this->area])
            ->andFilterWhere(['like', 'edad', $this->edad])
            ->andFilterWhere(['like', 'antiguedad', $this->antiguedad])
            ->andFilterWhere(['like', 'fotografia', $this->fotografia]);

        return $dataProvider;
    }
}
