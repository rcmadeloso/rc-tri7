<?php

namespace App\Services;
use App\Enums\{UserRole,EmployeePosition};

class RoleRestrictionService
{

    public function canMakeAction($role, $position): bool
    {
        switch ($role) {
            case UserRole::Manager:
                return true;
            case UserRole::WebDeveloper:
                return $position == EmployeePosition::WebDeveloper;
            case UserRole::WebDesigner:
                return $position == EmployeePosition::WebDesigner;
            default:
                return false;
        }
    }

}
