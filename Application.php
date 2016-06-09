<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "application".
 *
 * @property integer $app_id
 * @property integer $student_id
 * @property integer $intern_id
 * @property integer $company_id
 * @property string $resume
 *
 * @property StudentTable $student
 * @property Interns $intern
 * @property Company $company
 */
class Application extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'application';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['student_id', 'intern_id', 'company_id', 'resume'], 'required'],
            [['student_id', 'intern_id', 'company_id'], 'integer'],
            [['resume'], 'string', 'max' => 100],
            [['student_id'], 'exist', 'skipOnError' => true, 'targetClass' => StudentTable::className(), 'targetAttribute' => ['student_id' => 'student_id']],
            [['intern_id'], 'exist', 'skipOnError' => true, 'targetClass' => Interns::className(), 'targetAttribute' => ['intern_id' => 'intern_id']],
            [['company_id'], 'exist', 'skipOnError' => true, 'targetClass' => Company::className(), 'targetAttribute' => ['company_id' => 'company_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'app_id' => 'App ID',
            'student_id' => 'Student Name',
            'intern_id' => 'Intern ID',
            'company_id' => 'Company Name',
            'resume' => 'Resume',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudent()
    {
        return $this->hasOne(StudentTable::className(), ['student_id' => 'student_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIntern()
    {
        return $this->hasOne(Interns::className(), ['intern_id' => 'intern_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCompany()
    {
        return $this->hasOne(Company::className(), ['company_id' => 'company_id']);
    }
}
