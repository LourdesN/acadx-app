<?php

namespace App\Services;

use App\Models\Enrolment;
use App\Models\Grade;

class GradeService
{
    public function updateGradeScore($enrolmentId)
    {
        // Fetch enrolment with associated exams and courseworks
        $enrolment = Enrolment::with(['exams', 'courseworks'])->findOrFail($enrolmentId);

        // Calculate total score
        $examScore = $enrolment->exams->sum('marks');
        $courseworkScore = $enrolment->courseworks->sum('marks');
        $totalScore = $examScore + $courseworkScore;

        // Update or create grade for this enrolment
        $grade = Grade::updateOrCreate(
            ['enrolment_id' => $enrolmentId],
            ['score' => $totalScore]
        );

        return $grade;
    }
}