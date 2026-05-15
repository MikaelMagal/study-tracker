<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudySession extends Model
{
    protected $fillable = [
        'subject_id',
        'study_date',
        'duration_minutes',
        'difficulty_level',
        'notes'
    ];

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
}
