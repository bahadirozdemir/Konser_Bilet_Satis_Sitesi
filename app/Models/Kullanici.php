<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Kullanici extends Authenticatable
{

    use HasFactory;
    protected $table="musteri";
    protected $primaryKey = 'email';
    public $incrementing = false;
    protected $keyType = 'string';

}
