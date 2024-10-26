<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ResumeData extends Model
{
    protected $table = 'resume_data'; // Optional, as Laravel infers the table name
    protected $primaryKey = 'resume_id'; // Set the primary key if it's not 'id'

    protected $fillable = [
        'email', 
        'phone', 
        'summary', 
        'experience', 
        'education', 
        'skills',
    ];
}
