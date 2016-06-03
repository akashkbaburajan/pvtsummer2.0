<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Interns;

/**
 * InternsSearch represents the model behind the search form about `app\models\Interns`.
 */
class InternsSearch extends Interns
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['intern_id', 'stipend'], 'integer'],
            [['type', 'job_description', 'company_id', 'field', 'location', 'start_date', 'duration'], 'safe'],
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
        $query = Interns::find();

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

        $query->joinWith('company');
        // grid filtering conditions
        $query->andFilterWhere([
            'intern_id' => $this->intern_id,
            'stipend' => $this->stipend,
            'start_date' => $this->start_date,
        ]);

        $query->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'job_description', $this->job_description])
            ->andFilterWhere(['like', 'field', $this->field])
            ->andFilterWhere(['like', 'location', $this->location])
            ->andFilterWhere(['like', 'duration', $this->duration])
            ->andFilterWhere(['like', 'company.company_name', $this->company_id])
            ;

        return $dataProvider;
    }
}
