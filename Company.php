<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "company".
 *
 * @property integer $company_id
 * @property string $company_name
 * @property string $company_email
 * @property integer $company_contact
 * @property string $company_detail
 *
 * @property Interns[] $interns
 */
class Company extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'company';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['company_name', 'company_email', 'company_contact', 'company_detail'], 'required'],
            [['company_contact'], 'integer'],
            [['company_detail'], 'string'],
            [['company_name', 'company_email'], 'string', 'max' => 100],
            ['company_contact','string','max'=>10,'min'=>10],
            [['company_email'],'email']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'company_id' => 'Company ID',
            'company_name' => 'Company Name',
            'company_email' => 'Company Email',
            'company_contact' => 'Company Contact',
            'company_detail' => 'Company Details',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInterns()
    {
        return $this->hasMany(Interns::className(), ['company_id' => 'company_id']);
    }
}
