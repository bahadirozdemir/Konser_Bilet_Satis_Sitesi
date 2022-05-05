<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bizeulasin extends Model
{
  use HasFactory;
  protected $table="geribildirimler";
  protected $primaryKey = 'id';
  public $incrementing = false;
  protected $keyType = 'string';
  protected $fillable = ['name','email','konu',"mesaj","created_at","updated_at"];
}
