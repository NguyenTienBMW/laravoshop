<?php

namespace App\Models;
 use App\Models\Admin;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Admin extends Authenticatable
{
    protected $table='admins';
}
