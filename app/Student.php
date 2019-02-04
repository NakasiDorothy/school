<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class Student extends Model
{
    use HasRoles;
    protected $guarded=['id'];

    protected $guard_name = 'web';
}
