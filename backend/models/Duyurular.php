<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "duyurular".
 *
 * @property string $ad
 * @property string $soyad
 * @property string $tarih
 * @property string $konu
 * @property string $duyuru
 */
class Duyurular extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'duyurular';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ad', 'soyad', 'konu', 'duyuru'], 'required'],
            [['tarih'], 'safe'],
            [['duyuru'], 'string'],
            [['ad', 'soyad'], 'string', 'max' => 20],
            [['konu'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ad' => 'Ad',
            'soyad' => 'Soyad',
            'tarih' => 'Tarih',
            'konu' => 'Konu',
            'duyuru' => 'Duyuru',
        ];
    }
}
