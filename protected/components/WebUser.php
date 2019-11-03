<?php

/*
 * YiiCWebUser Class extend /framework/web/auth/ CWebUser.
 */

class WebUser extends CWebUser
{
	public function checkAccess($operation, $params=array())
	{
		if (empty($this->id)) {
			// Not identified => no rights
			return false;
		}
		$role = $this->getState('role');
		if ($role == 'admin') {
			return true; // admin role has access to everything
		}

		// Check if multiple roles are available
		if(is_array($operation)) { 
            return (array_search($role,$operation)!==false);
        }

		// allow access if the operation request is the current user's role
		return ($operation === $role);
	}
}