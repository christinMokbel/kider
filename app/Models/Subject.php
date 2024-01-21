<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Models\Teacher;

class Subject extends Model
{
    use HasFactory , SoftDeletes;
    protected $fillable = [
        'subjectname',
        'age',
        'time',
        'capacity',
        'price',
        'published',
        'image',
        'teacher_id',
        ];

        public function teacher(){
            return $this->belongsTo(Teacher::class);
        } 
}
