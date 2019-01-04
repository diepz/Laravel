<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['name', 'birth', 'image', 'email'];

    public function hasDefinePrivilege($permission)
    {
        if (!$permission) {
            return false;
        }

        return $this->permission ==  $permission;
    }
}
