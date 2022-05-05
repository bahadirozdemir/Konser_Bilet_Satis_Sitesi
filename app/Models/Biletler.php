<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biletler extends Model
{
  use HasFactory;
  protected $table="biletgecmisi";
  protected $keyType = 'string';
  protected $primaryKey = 'biletid';
  protected $fillable = ['biletid','musteri_id','konser_id',"created_at","updated_at"];
}
