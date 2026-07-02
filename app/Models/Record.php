<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    //

    function scopeWithQuiz($query){
        return $query->join('quizzes','records.quiz_id',"=","quizzes.id")
        ->select('quizzes.*','records.*');
    }

    function quiz(){
        return $this->belongsTo(Quiz::class);
    }

    function mcqRecords(){
        return $this->hasMany(MCQ_Record::class, 'record_id');
    }

    function getScorePercent(){
        $total = $this->mcqRecords()->count();
        if ($total == 0) return 0;
        $correct = $this->mcqRecords()->where('is_correct', 1)->count();
        return round(($correct / $total) * 100);
    }
}
