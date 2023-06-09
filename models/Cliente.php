<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "clientes".
 *
 * @property int $ID_EXTERNO
 * @property string $Cedula
 * @property string $Nombre
 * @property string $Telefono
 * @property string $Email
 * @property string $Genero
 *
 * @property Camposextra[] $camposextras
 */
class Cliente extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'clientes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Cedula', 'Nombre', 'Telefono', 'Email', 'Genero'], 'required'],
            [['Cedula', 'Telefono'], 'string', 'max' => 10],
            [['Nombre'], 'string', 'max' => 100],
            [['Email'], 'string', 'max' => 200],
            [['Genero'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID_EXTERNO' => 'Id Externo',
            'Cedula' => 'Cedula',
            'Nombre' => 'Nombre',
            'Telefono' => 'Telefono',
            'Email' => 'Email',
            'Genero' => 'Genero',
        ];
    }

    /**
     * Gets query for [[Camposextras]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCamposextras()
    {
        return $this->hasMany(Camposextra::class, ['ID_EXTERNO' => 'ID_EXTERNO']);
    }
}
