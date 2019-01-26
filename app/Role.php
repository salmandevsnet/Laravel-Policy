<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';

    protected $fillable = [
        'name', 'slug', 'permissions',
    ];

    protected $casts = [
        'permissions' => 'array',
    ];

    public function users(){
        return $this->belongsToMany(User::class, 'role_user','role_id', 'user_id');
    }

    public function hasAccess(array $permissions):bool{
        foreach($permissions as $permission){
            if($this->hasPermission($permission))
                return true;
        }
        return false;
    }

    private function hasPermission(string $permission):bool{
        return $this->permission[$permission] ?? false;
    }

}
