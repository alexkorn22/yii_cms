<?php

namespace app\modules\admin\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\SourceMessage;

/**
 * SourceMessageSearch represents the model behind the search form of `app\modules\admin\models\SourceMessage`.
 */
class SourceMessageSearch extends SourceMessage
{
    public $languages = [];

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['category', 'message', 'languages'], 'safe'],
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
        $query = SourceMessage::find();
        $languages = Yii::$app->getUrlManager()->languages;

        foreach ($languages as $one){
            $query->leftJoin('{{%message}} as '.$one, $one.'.id = {{%source_message}}.id and '.$one.'.language = "'.$one.'"');
        }

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => false,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'category', $this->category])
            ->andFilterWhere(['like', 'message', $this->message]);

        foreach ($languages as $one){
            if(isset($this->languages[$one]))
                $query->andFilterWhere(['like', $one.'.translation', $this->languages[$one]]);
        }

        return $dataProvider;
    }
}
