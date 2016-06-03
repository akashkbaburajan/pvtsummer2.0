<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "interns".
 *
 * @property integer $intern_id
 * @property integer $company_id
 * @property string $type
 * @property string $job_description
 * @property string $field
 * @property integer $stipend
 * @property string $location
 * @property string $start_date
 * @property string $duration
 *
 * @property Company $company
 */
class Interns extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'interns';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['company_id', 'job_description', 'field', 'stipend', 'location', 'start_date', 'duration'], 'required'],
            [['company_id', 'stipend'], 'integer'],
            [['job_description'], 'string'],
            [['start_date'], 'safe'],
            [['type', 'field', 'location', 'duration'], 'string', 'max' => 100],
            [['company_id'], 'exist', 'skipOnError' => true, 'targetClass' => Company::className(), 'targetAttribute' => ['company_id' => 'company_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'intern_id' => 'Intern ID',
            'company_id' => 'Company Name',
            'type' => 'Type',
            'job_description' => 'Job Description',
            'field' => 'Field',
            'stipend' => 'Stipend',
            'location' => 'Location',
            'start_date' => 'Start Date',
            'duration' => 'Duration',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCompany()
    {
        return $this->hasOne(Company::className(), ['company_id' => 'company_id']);
    }
}
