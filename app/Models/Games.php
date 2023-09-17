<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mehradsadeghi\FilterQueryString\FilterQueryString;



class Games extends Model
{
    use HasFactory,FilterQueryString;

    protected $fillable = [
    'title',
    'description',
    'release_date',
    'genre'

    ];
     protected $filters = [
     'sort'];


    
}
