<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etkinlik extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table="tablo";
    protected $keyType = 'string';
      protected $fillable = ['id','sanatci','konsertarih',"konseryeri","konserfiyat","etkinlikturu","konsersehri","kalanbilet","created_at","updated_at","toplambilet"];
}
