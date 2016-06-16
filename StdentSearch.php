<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Stdent;

/**
 * StdentSearch represents the model behind the search form about `app\models\Stdent`.
 */
class StdentSearch extends Stdent
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['student_id', 'phone'], 'integer'],
            [['email', 'name', 'institute', 'area_of_interest', 'resume'], 'safe'],
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
        $query = Stdent::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'student_id' => $this->student_id,
            'phone' => $this->phone,
        ]);

        $query->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'institute', $this->institute])
            ->andFilterWhere(['like', 'area_of_interest', $this->area_of_interest])
            ->andFilterWhere(['like', 'resume', $this->resume]);

        return $dataProvider;
    }
}
