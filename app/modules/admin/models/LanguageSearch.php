<?php

namespace app\modules\admin\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\Language;

/**
 * LanguageSearch represents the model behind the search form of `app\modules\admin\models\Language`.
 */
class LanguageSearch extends Language
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'position'], 'integer'],
            [['visible'], 'boolean'],
            [['label', 'code', 'visible', 'position'], 'safe'],
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
        $query = Language::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'visible' => $this->visible,
            'position' => $this->position,
        ]);

        $query->andFilterWhere(['like', 'label', $this->label])
            ->andFilterWhere(['like', 'code', $this->code]);

        return $dataProvider;
    }
}
