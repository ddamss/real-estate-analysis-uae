<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $fillable =['page','price','url','title','location','image','type','bedrooms','bathrooms','sqft','brokerLogo'];
}
