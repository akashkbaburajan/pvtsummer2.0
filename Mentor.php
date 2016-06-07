<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mentor".
 *
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $expertise
 * @property string $resume
 */
class Mentor extends \yii\db\ActiveRecord
{ public $file;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mentor';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'email', 'phone', 'expertise'], 'required'],
            [['name'], 'string', 'max' => 100],
            [['Verified'],'string','max' => 5],
            [['file'],'file'],
             ['email', 'email'],
             ['phone','string','length'=>[10]],
            [['expertise'], 'string', 'max' => 1000],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Name',
            'email' => 'Email',
            'phone' => 'Phone',
            'expertise' => 'Expertise',
            'file' => 'Resume',
        ];
    }
}
