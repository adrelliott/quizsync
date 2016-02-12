<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
	protected $fillable = ['tenant_title', 'tenant_description'];

}
