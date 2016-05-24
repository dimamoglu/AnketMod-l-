<?php

namespace frontend\modules\admin\models;

use Yii;

/**
 * This is the model class for table "anket".
 *
 * @property integer $id
 * @property string $soru
 */
class Anket extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'anket';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['soru'], 'required'],
            [['soru'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'soru' => 'Soru',
        ];
    }
}
