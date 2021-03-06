<?php

namespace backend\modules\categories\models;

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
        $id;

    const ACTION = '/admin/categories';

    public function rules()
    {
        return [
            [['search'], 'safe']
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
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id
        ]);

        if($this->search){
            $query->andWhere('title like :search OR id like :search',
                ['search'=>'%'.$this->search.'%']);
        }

        $query->orderBy(['id' => SORT_ASC]);

        return $dataProvider;
    }

    public function attributeLabels()
    {
        return [
            'title'=>'Title',
            'order'=>'Sort By'
        ];
    }
}