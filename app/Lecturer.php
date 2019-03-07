<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use QCod\ImageUp\HasImageUploads;


class Lecturer extends Model

{
	use Notifiable, HasImageUploads;
	
	protected static $imageFields = [

		'avatar' => [

			'placeholder' => 'https://api.adorable.io/avatars/160',
			'width' =>160,
			'height' =>160,
			'resize_image_quality' => 90,
			'crop' => true		
		]
	];	
    protected $guarded =['id'];

    use HasRoles;

    protected $guard_name = 'web';

    
}
