<?php

namespace App\Models;

use App\Services\RoleRestrictionService;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'position',
    ];

    protected $appends = [
        'can_update',
        'can_delete',
    ];

    protected $roleRestriction;

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->roleRestriction = new RoleRestrictionService();
    }

    public function getCanUpdateAttribute()
    {
        return $this->roleRestriction->canMakeAction(auth()->user()->role, $this->position);
    }

    public function getCanDeleteAttribute()
    {
        return $this->roleRestriction->canMakeAction(auth()->user()->role, $this->position);
    }
}
