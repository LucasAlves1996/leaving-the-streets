<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\RepositoryInterface;

class Usuario extends User
{
    protected $table = 'usuarios';
}
