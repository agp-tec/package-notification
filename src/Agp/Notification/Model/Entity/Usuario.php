<?php

namespace Agp\Notification\Model\Entity;

use Agp\Notification\Traits\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class Usuario extends Authenticatable implements JWTSubject
{
    use Notifiable;

    public $synchronized = false;
    public $incrementing = false;
    public $timestamps = false;
    protected $table = 'log_pessoa';
    protected $primaryKey = 'adm_pessoa_id';
    protected $fillable = [];

    public function __constructor(array $attributes = [])
    {
        $this->setConnection(config('notification.notification_connection'));

        parent::__construct($attributes);
    }

    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }
}
