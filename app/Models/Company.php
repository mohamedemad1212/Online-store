<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{  use HasFactory;
    /** @use HasFactory<\Database\Factories\CompanyFactory> */
  protected $table = "companies";
  protected $fillable=["name"];
 public function ProductData(){
    return $this->hasMany(ProductData::class);
   }
 }