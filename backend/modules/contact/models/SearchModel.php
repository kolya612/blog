<?php

namespace backend\modules\contact\models;

use backend\models\BaseSearchModel;
use yii\data\ActiveDataProvider;

/**
 * Login form
 */
class SearchModel extends BaseSearchModel
{
    public $from,
        $to,
        $search,
        $order,
        $id,
        $first_name,
        $last_name,
        $email,
        $gender;

    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['first_name','search'], 'safe'],
        ];
    }



    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($modelName,$params)
    {
        $query = $modelName::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'key' => 'id'
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id
        ]);

        if($this->search){
            $query->andWhere('first_name like :search OR phone like :search OR email like :search OR id like :search',
                ['search'=>'%'.$this->search.'%']);
        }

        $query->andFilterWhere(['like', 'first_name', $this->first_name])
            ->andFilterWhere(['like', 'email', $this->email]);

        return $dataProvider;
    }

    public function attributeLabels()
    {
        return [
            'first_name'=>'first_name',
            'last_name'=>'last_name',
            'order'=>'Sort By:',
            'gender'=>'Gender'
        ];
    }
}