<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sepet extends Model
{
  use HasFactory;
  protected $table="sepet";
  protected $keyType = 'string';
  protected $primaryKey = 'email';
  protected $fillable = ['email','urun_id',"biletsayisi","created_at","updated_at"];
}
