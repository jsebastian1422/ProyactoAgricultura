<?php

namespace app\models;

class User extends \yii\base\BaseObject implements \yii\web\IdentityInterface
{
    public $usuario_id;
    public $usuario;
    public $contrasena;
    public $fecha_registro;
    public $estado;
    public $foto_usuario;
    public $rol_id;
    public $documento;
    public $tipo_documento;
    public $nombre;
    public $edad;
    public $sexo_id;
    public $celular;
    public $direccion;
    public $eps;
    public $authKey;
    public $accessToken;

    /**
     * {@inheritdoc}
     */
    public static function findIdentity($usuario_id)
    {
        $tableUsers = Usuarios::find()->where(["usuario_id" => $usuario_id])->one();
        if ($tableUsers === null) {
            return null;
        }
        return new static($tableUsers);
        //return isset(self::$users[$id]) ? new static(self::$users[$id]) : null;
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        foreach (self::$users as $user) {
            if ($user['accessToken'] === $token) {
                return new static($user);
            }
        }

        return null;
    }

    /**
     * Finds user by username
     *
     * @param string $usuario
     * @return static|null
     */
    public static function findByUsername($usuario)
    {
        $tableUsers = Usuarios::find()->where(["usuario" => $usuario])->one();
        if ($tableUsers === null) {
            return null;
        }

        return new static($tableUsers);
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->usuario_id;
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthKey()
    {
        return $this->authKey;
    }

    /**
     * {@inheritdoc}
     */
    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($contrasena)
    {
        return $this->contrasena === md5($contrasena);
    }
}
