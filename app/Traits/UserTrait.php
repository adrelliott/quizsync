<?php

namespace App\Traits;

trait UserTrait {

	protected function addUserAttributes()
    {
    	$this->user_id = 2;
    	$this->tenant_id = 33;
    }
}