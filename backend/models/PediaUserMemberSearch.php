<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\PediaUserMember;

/**
 * Team:没有蛀牙
 * Coding by:孙一冉 1711297，20190712
 */
/**
 * PediaUserMemberSearch represents the model behind the search form of `common\models\PediaUserMember`.
 */
class PediaUserMemberSearch extends PediaUserMember
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['uid', 'gid'], 'integer'],
            [['loginname'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = PediaUserMember::find();

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
            'uid' => $this->uid,
            'gid' => $this->gid,
        ]);

        $query->andFilterWhere(['like', 'loginname', $this->loginname]);

        return $dataProvider;
    }
}
