<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Idea extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'subject',
    ];
    // $table->id();
    //         $table->string('title');
    //         $table->string('subject');
    //         $table->timestamps();
}
