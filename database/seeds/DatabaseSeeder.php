<?php

use Illuminate\Database\Seeder;

use App\Student;
use App\Score;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $su = Student::create(['name' => 'Suzuka Nakamoto']);
      $yui = Student::create(['name' => 'Yui Mizuno']);
      $moa = Student::create(['name' => 'Moa Kikuchi']);

      $su->scores()->saveMany([
          new Score(['year' => 2010, 'score' => 8.5 ]),
          new Score(['year' => 2011, 'score' => 3 ]),
          new Score(['year' => 2012, 'score' => 2.5 ]),
      ]);
      $yui->scores()->saveMany([
          new Score(['year' => 2010, 'score' => 7 ]),
          new Score(['year' => 2011, 'score' => 5 ]),
          new Score(['year' => 2012, 'score' => 6 ]),
          new Score(['year' => 2013, 'score' => 5 ]),
      ]);
      $moa->scores()->saveMany([
          new Score(['year' => 2010, 'score' => 7 ]),
          new Score(['year' => 2011, 'score' => 4 ]),
          new Score(['year' => 2012, 'score' => 9 ]),
          new Score(['year' => 2013, 'score' => 7.5 ]),
      ]);
    }
}
