<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function path()
    {
        return route('dashboard.index', $this);
    }
    public function addResult($grade){
        $this->refresh();

        if($this->best_grade >= $grade) {
            return;
        }

        $this->best_grade = $grade;


        if ($this->best_grade >= $this->lowest_passing_grade) {
            $this->passed_at = now();
        }

        $this->save();
    }
}
