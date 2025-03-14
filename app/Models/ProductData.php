<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductData extends Model
{ use HasFactory;
    protected $table ="product_data";
    protected $fillable =["name","price","description","company_id","img_path"];
    /** @use HasFactory<\Database\Factories\PoductDataFactory> */
   public function Company(){   return $this->belongsTo(Company::class);
  }
}
