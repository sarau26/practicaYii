<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "camposextra".
 *
 * @property int $ID
 * @property int $ID_EXTERNO
 * @property string|null $Articulo
 * @property float|null $Precio
 * @property string|null $Metodo_pago
 * @property string|null $Motivo_negatividad
 *
 * @property Cliente $eXTERNO
 */
class Camposextra extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'camposextra';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID_EXTERNO'], 'required'],
            [['ID_EXTERNO'], 'integer'],
            [['Precio'], 'number'],
            [['Articulo'], 'string', 'max' => 50],
            [['Metodo_pago', 'Motivo_negatividad'], 'string', 'max' => 20],
            [['ID_EXTERNO'], 'exist', 'skipOnError' => true, 'targetClass' => Cliente::class, 'targetAttribute' => ['ID_EXTERNO' => 'ID_EXTERNO']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'ID_EXTERNO' => 'Id Externo',
            'Articulo' => 'Articulo',
            'Precio' => 'Precio',
            'Metodo_pago' => 'Metodo Pago',
            'Motivo_negatividad' => 'Motivo Negatividad',
        ];
    }

    /**
     * Gets query for [[EXTERNO]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEXTERNO()
    {
        return $this->hasOne(Clientes::class, ['ID_EXTERNO' => 'ID_EXTERNO']);
    }
}
