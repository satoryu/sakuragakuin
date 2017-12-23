<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Student;
use App\Score;


class WelcomeController extends Controller
{
    public function index()
    {
        $students = Student::selectRaw('name, year2010.rank AS rank2010, year2011.rank AS rank2011, year2012.rank AS rank2012');

        $years = array(2010, 2011, 2012);

        foreach ($years as $year) {
            $sub_query = $this->getScoreRanking($year);
            $students->leftJoin(
                \DB::raw("({$sub_query->toSql()}) AS year{$year}"),
                "year{$year}.student_id", '=', 'students.id'
            );
            $students->mergeBindings($sub_query->getQuery());
        }

        return view('welcome', ['students' => $students->get()]);
    }

    public function getScoreRanking($year)
    {
        return Score::selectRaw('student_id, RANK() OVER (PARTITION BY year ORDER BY score) AS rank')
                ->where('year', $year);
    }
}
