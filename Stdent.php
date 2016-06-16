<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "student".
 *
 * @property string $name
 * @property string $email
 * @property string $institute
 * @property integer $phone
 * @property string $area_of_interest
 */
class Stdent extends \yii\db\ActiveRecord
{
    public $file;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'student';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'email', 'institute', 'phone', 'area_of_interest'], 'required'],
            [['phone'], 'integer'],
            ['email','email'],
            ['phone','double'],
            [['file'],'file'],
            ['phone','string','max'=>10,'min'=>10],
            [['area_of_interest','resume'], 'string'],
            [['name', 'email', 'institute'], 'string', 'max' => 100],
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
            'institute' => 'Institute',
            'phone' => 'Phone',
            'area_of_interest' => 'Area Of Interest',
            'file' => 'Resume',
        ];
    }
     public function getInstitute()
    {
        return $this->hasMany(Institute::className(), ['institute_name' => 'institute_name']);
    }
}
