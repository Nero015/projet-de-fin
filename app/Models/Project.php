<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'member1',
        'member2',
        'member3',
        'enc',
        'subject',
        'anne',
        'LMD',
        'intro',
        'url_list',
        'uploaded_file',
        'status',
        'report',
    ];

    // $table->id();
    //         $table->string('member1');
    //         $table->string('member2');
    //         $table->string('member3');
    //         $table->string('enc');
    //         $table->string('subject');
    //         $table->string('anne');
    //         $table->string('LMD');
    //         $table->string('intro');
    //         $table->string('url_list');
    //         $table->string('uploaded_file');
    //         $table->integer('status');
    //         $table->timestamps();

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
