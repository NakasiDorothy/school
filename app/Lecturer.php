<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class Lecturer extends Model
{
    protected $guarded =['id'];

    use HasRoles;

    protected $guard_name = 'web';

    
}
