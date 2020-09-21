<?php

namespace App;

use Nantaburi\Mongodb\MongoNativeDriver\Model ;
class User_ntbr extends Model
{
    protected $collection = "users";
    protected $database = "chat";

    protected $schema = [
            'users' => [
                "id" => [
                    'AutoInc' => true,
                    'AutoIncStartwith' => 10,
                    'Index' => true,
                    'Unique' => true
                ],
                "name",
                "email" => [
                    'Index' => true,
                    'Unique' => true
                ],
                "status",
                "provider",
                "provider_id",
                "email_verified_at",
                "password",
                "remember_token"
            ],
        ];

    public function messages()
    {
        return $this->hasMany(Message::class);
    }

    public function session()
    {
        return $this->hasMany(Session::class);
    }
}
