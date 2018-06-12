<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    public function users() {
            return $this->HasMany('\App\User', 'roles_id');
        }
}
