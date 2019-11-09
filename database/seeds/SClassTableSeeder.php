<?php

use App\Models\SClass;

use Illuminate\Database\Seeder;

class SClassTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('class')->delete();

        /* 2018-2019 2nd Semester */

        $class = new SClass;
        $class->class_id = 1;
        $class->section = null;
        $class->instructor_id = 'K491';
        $class->course_code = 'OS';
        $class->acad_term_id = '181902';
        $class->lec_day = 'T';
        $class->lec_time_start = '13:00:00';
        $class->lec_time_end = '18:00:00';
        $class->room = 'College Room';
        $class->save();

        $class = new SClass;
        $class->class_id = 2;
        $class->section = null;
        $class->instructor_id = 'K491';
        $class->course_code = 'IT 322';
        $class->acad_term_id = '181902';
        $class->lec_day = 'TH';
        $class->lec_time_start = '13:00:00';
        $class->lec_time_end = '18:00:00';
        $class->room = 'College Room';
        $class->save();

        $class = new SClass;
        $class->class_id = 3;
        $class->section = null;
        $class->instructor_id = 'K492';
        $class->course_code = 'Eng 1';
        $class->acad_term_id = '181902';
        $class->lec_day = 'TH';
        $class->lec_time_start = '09:00:00';
        $class->lec_time_end = '12:00:00';
        $class->room = 'College Room';
        $class->save();

        $class = new SClass;
        $class->class_id = 4;
        $class->section = null;
        $class->instructor_id = 'K491';
        $class->course_code = 'HumCom';
        $class->acad_term_id = '181902';
        $class->lec_day = 'F';
        $class->lec_time_start = '13:00:00';
        $class->lec_time_end = '18:00:00';
        $class->room = 'College Room';
        $class->save();

        $class = new SClass;
        $class->class_id = 5;
        $class->section = null;
        $class->instructor_id = 'K492';
        $class->course_code = 'IT 422';
        $class->acad_term_id = '181902';
        $class->lec_day = 'F';
        $class->lec_time_start = '9:00:00';
        $class->lec_time_end = '12:00:00';
        $class->room = null;
        $class->save();

        $class = new SClass;
        $class->class_id = 6;
        $class->section = null;
        $class->instructor_id = 'K491';
        $class->course_code = 'IT 121';
        $class->acad_term_id = '181902';
        $class->lec_day = 'M';
        $class->lec_time_start = '13:00:00';
        $class->lec_time_end = '18:00:00';
        $class->room = 'College Room';
        $class->save();

        $class = new SClass;
        $class->class_id = 7;
        $class->section = null;
        $class->instructor_id = 'K491';
        $class->course_code = 'IT 323';
        $class->acad_term_id = '181902';
        $class->lec_day = 'W';
        $class->lec_time_start = '13:00:00';
        $class->lec_time_end = '18:00:00';
        $class->room = 'College Room';
        $class->save();

        /* 2019-2020 1st Semester */

        $class = new SClass;
        $class->class_id = 8;
        $class->section = '401-A';
        $class->instructor_id = 'K519';
        $class->course_code = 'IT 413';
        $class->acad_term_id = '192001';
        $class->lec_day = 'W';
        $class->lec_time_start = '13:00:00';
        $class->lec_time_end = '16:00:00';
        $class->lab_day = 'W';
        $class->lab_time_start = '16:00:00';
        $class->lab_time_end = '18:00:00';
        $class->room = '130';
        $class->save();

        $class = new SClass;
        $class->class_id = 9;
        $class->section = '401-A';
        $class->instructor_id = 'K519';
        $class->course_code = 'ELE 3';
        $class->acad_term_id = '192001';
        $class->lec_day = 'W';
        $class->lec_time_start = '13:00:00';
        $class->lec_time_end = '18:00:00';
        $class->room = '130';
        $class->save();

        $class = new SClass;
        $class->class_id = 10;
        $class->section = '401-A';
        $class->instructor_id = 'K491';
        $class->course_code = 'IT 211';
        $class->acad_term_id = '192001';
        $class->lec_day = 'T';
        $class->lec_time_start = '10:00:00';
        $class->lec_time_end = '13:00:00';
        $class->room = 'College Room';
        $class->save();

        $class = new SClass;
        $class->class_id = 11;
        $class->section = '401-A';
        $class->instructor_id = 'K491';
        $class->course_code = 'IT 312';
        $class->acad_term_id = '192001';
        $class->lec_day = 'F';
        $class->lec_time_start = '10:00:00';
        $class->lec_time_end = '13:00:00';
        $class->room = 'College Room';
        $class->save();

        $class = new SClass;
        $class->class_id = 12;
        $class->section = '401-A';
        $class->instructor_id = 'K519';
        $class->course_code = 'IT 213';
        $class->acad_term_id = '192001';
        $class->lec_day = 'W';
        $class->lec_time_start = '17:00:00';
        $class->lec_time_end = '20:00:00';
        $class->room = 'College Room';
        $class->save();

        $class = new SClass;
        $class->class_id = 13;
        $class->section = '401-A';
        $class->instructor_id = 'K519';
        $class->course_code = 'IT 223';
        $class->acad_term_id = '192001';
        $class->lec_day = 'TH';
        $class->lec_time_start = '17:00:00';
        $class->lec_time_end = '20:00:00';
        $class->room = 'College Room';
        $class->save();

        $class = new SClass;
        $class->class_id = 14;
        $class->section = '401-A';
        $class->instructor_id = 'K346';
        $class->course_code = 'IT 221';
        $class->acad_term_id = '192001';
        $class->lec_day = 'M';
        $class->lec_time_start = '10:00:00';
        $class->lec_time_end = '13:00:00';
        $class->room = 'College Room';
        $class->save();

        $class = new SClass;
        $class->class_id = 15;
        $class->section = '401-A';
        $class->instructor_id = 'K491';
        $class->course_code = 'IT 221';
        $class->acad_term_id = '192001';
        $class->lec_day = 'M';
        $class->lec_time_start = '10:00:00';
        $class->lec_time_end = '13:00:00';
        $class->room = 'College Room';
        $class->save();

        $class = new SClass;
        $class->class_id = 16;
        $class->section = '401-A';
        $class->instructor_id = 'K491';
        $class->course_code = 'IT 411';
        $class->acad_term_id = '192001';
        $class->lec_day = 'M';
        $class->lec_time_start = '09:00:00';
        $class->lec_time_end = '12:00:00';
        $class->room = 'College Room';
        $class->save();

        $class = new SClass;
        $class->class_id = 17;
        $class->section = '401-A';
        $class->instructor_id = 'K491';
        $class->course_code = 'IT 412';
        $class->acad_term_id = '192001';
        $class->lec_day = 'T';
        $class->lec_time_start = '09:00:00';
        $class->lec_time_end = '12:00:00';
        $class->room = 'College Room';
        $class->save();

        $class = new SClass;
        $class->class_id = 18;
        $class->section = '401-A';
        $class->instructor_id = 'K100';
        $class->course_code = 'ITELE 4';
        $class->acad_term_id = '192001';
        $class->lec_day = 'T';
        $class->lec_time_start = '15:00:00';
        $class->lec_time_end = '18:00:00';
        $class->room = null;
        $class->save();

        $class = new SClass;
        $class->class_id = 19;
        $class->section = '101-B';
        $class->instructor_id = 'K519';
        $class->course_code = 'IntroComp';
        $class->acad_term_id = '192001';
        $class->lec_day = 'F';
        $class->lec_time_start = '14:00:00';
        $class->lec_time_end = '17:00:00';
        $class->lab_day = 'F';
        $class->lab_time_start = '17:00:00';
        $class->lab_time_end = '19:00:00';
        $class->room = '123';
        $class->save();

        $class = new SClass;
        $class->class_id = 20;
        $class->section = '101-C';
        $class->instructor_id = 'K519';
        $class->course_code = 'IntroComp';
        $class->acad_term_id = '192001';
        $class->lec_day = 'M';
        $class->lec_time_start = '07:00:00';
        $class->lec_time_end = '10:00:00';
        $class->lab_day = 'W';
        $class->lab_time_start = '18:00:00';
        $class->lab_time_end = '20:00:00';
        $class->room = '123';
        $class->save();

        $class = new SClass;
        $class->class_id = 21;
        $class->section = '101-A';
        $class->instructor_id = 'K491';
        $class->course_code = 'IntroComp';
        $class->acad_term_id = '192001';
        $class->lec_day = 'W';
        $class->lec_time_start = '13:00:00';
        $class->lec_time_end = '18:00:00';
        $class->room = '105';
        $class->save();

        $class = new SClass;
        $class->class_id = 22;
        $class->section = '101-A';
        $class->instructor_id = 'K491';
        $class->course_code = 'ComPro1';
        $class->acad_term_id = '192001';
        $class->lec_day = 'T';
        $class->lec_time_start = '13:00:00';
        $class->lec_time_end = '18:00:00';
        $class->room = '105';
        $class->save();

        $class = new SClass;
        $class->class_id = 23;
        $class->section = '101-B';
        $class->instructor_id = 'K491';
        $class->course_code = 'ComPro1';
        $class->acad_term_id = '192001';
        $class->lec_day = 'T';
        $class->lec_time_start = '13:00:00';
        $class->lec_time_end = '18:00:00';
        $class->room = '123';
        $class->save();

        $class = new SClass;
        $class->class_id = 24;
        $class->section = '101-C';
        $class->instructor_id = 'K519';
        $class->course_code = 'ComPro1';
        $class->acad_term_id = '192001';
        $class->lec_day = 'W';
        $class->lec_time_start = '07:00:00';
        $class->lec_time_end = '10:00:00';
        $class->lab_day = 'TH';
        $class->lab_time_start = '18:00:00';
        $class->lab_time_end = '20:00:00';
        $class->room = '123';
        $class->save();

        $class = new SClass;
        $class->class_id = 25;
        $class->section = '201-A';
        $class->instructor_id = 'K519';
        $class->course_code = 'PlatTech';
        $class->acad_term_id = '192001';
        $class->lec_day = 'M';
        $class->lec_time_start = '17:00:00';
        $class->lec_time_end = '20:00:00';
        $class->lab_day = 'W';
        $class->lab_time_start = '16:00:00';
        $class->lab_time_end = '18:00:00';
        $class->room = '123, 129 (LAB)';
        $class->save();

        $class = new SClass;
        $class->class_id = 26;
        $class->section = '201-A';
        $class->instructor_id = 'K519';
        $class->course_code = 'Anmod';
        $class->acad_term_id = '192001';
        $class->lec_day = 'T';
        $class->lec_time_start = '14:00:00';
        $class->lec_time_end = '17:00:00';
        $class->lab_day = 'T';
        $class->lab_time_start = '17:00:00';
        $class->lab_time_end = '19:00:00';
        $class->room = '130, 129 (LAB)';
        $class->save();

        $class = new SClass;
        $class->class_id = 27;
        $class->section = '201-A';
        $class->instructor_id = 'K491';
        $class->course_code = 'Datstruc';
        $class->acad_term_id = '192001';
        $class->lec_day = 'TH';
        $class->lec_time_start = '13:00:00';
        $class->lec_time_end = '18:00:00';
        $class->room = '130';
        $class->save();

        $class = new SClass;
        $class->class_id = 28;
        $class->section = '201-A';
        $class->instructor_id = 'K491';
        $class->course_code = 'OOP';
        $class->acad_term_id = '192001';
        $class->lec_day = 'F';
        $class->lec_time_start = '14:00:00';
        $class->lec_time_end = '19:00:00';
        $class->room = '130';
        $class->save();

        $class = new SClass;
        $class->class_id = 29;
        $class->section = '101-A';
        $class->instructor_id = 'K492';
        $class->course_code = 'Eng1';
        $class->acad_term_id = '192001';
        $class->lec_day = 'M';
        $class->lec_time_start = '07:00:00';
        $class->lec_time_end = '10:00:00';
        $class->room = '105';
        $class->save();

        $class = new SClass;
        $class->class_id = 30;
        $class->section = '101-A';
        $class->instructor_id = 'K492';
        $class->course_code = 'Math1';
        $class->acad_term_id = '192001';
        $class->lec_day = 'TH';
        $class->lec_time_start = '13:00:00';
        $class->lec_time_end = '16:00:00';
        $class->room = '105';
        $class->save();

        $class = new SClass;
        $class->class_id = 31;
        $class->section = '101-A';
        $class->instructor_id = 'K492';
        $class->course_code = 'Philit';
        $class->acad_term_id = '192001';
        $class->lec_day = 'TH';
        $class->lec_time_start = '14:00:00';
        $class->lec_time_end = '17:00:00';
        $class->room = '105';
        $class->save();

        $class = new SClass;
        $class->class_id = 32;
        $class->section = '101-B';
        $class->instructor_id = 'K492';
        $class->course_code = 'Eng1';
        $class->acad_term_id = '192001';
        $class->lec_day = 'M';
        $class->lec_time_start = '10:00:00';
        $class->lec_time_end = '13:00:00';
        $class->room = '123';
        $class->save();

        $class = new SClass;
        $class->class_id = 33;
        $class->section = '101-B';
        $class->instructor_id = 'K492';
        $class->course_code = 'Math1';
        $class->acad_term_id = '192001';
        $class->lec_day = 'TH';
        $class->lec_time_start = '16:00:00';
        $class->lec_time_end = '19:00:00';
        $class->room = '123';
        $class->save();

        $class = new SClass;
        $class->class_id = 34;
        $class->section = '101-B';
        $class->instructor_id = 'K492';
        $class->course_code = 'Philit';
        $class->acad_term_id = '192001';
        $class->lec_day = 'W';
        $class->lec_time_start = '13:00:00';
        $class->lec_time_end = '16:00:00';
        $class->room = '123';
        $class->save();

        $class = new SClass;
        $class->class_id = 35;
        $class->section = '101-C';
        $class->instructor_id = 'K492';
        $class->course_code = 'Eng1';
        $class->acad_term_id = '192001';
        $class->lec_day = 'T';
        $class->lec_time_start = '07:00:00';
        $class->lec_time_end = '10:00:00';
        $class->room = '123';
        $class->save();

        $class = new SClass;
        $class->class_id = 36;
        $class->section = '101-C';
        $class->instructor_id = 'K492';
        $class->course_code = 'Math1';
        $class->acad_term_id = '192001';
        $class->lec_day = 'TH';
        $class->lec_time_start = '07:00:00';
        $class->lec_time_end = '10:00:00';
        $class->room = '123';
        $class->save();

        $class = new SClass;
        $class->class_id = 37;
        $class->section = '101-C';
        $class->instructor_id = 'K492';
        $class->course_code = 'Philit';
        $class->acad_term_id = '192001';
        $class->lec_day = 'W';
        $class->lec_time_start = '10:00:00';
        $class->lec_time_end = '13:00:00';
        $class->room = '123';
        $class->save();

        $class = new SClass;
        $class->class_id = 38;
        $class->section = '201-A';
        $class->instructor_id = 'K492';
        $class->course_code = 'DiscMath';
        $class->acad_term_id = '192001';
        $class->lec_day = 'T';
        $class->lec_time_start = '10:00:00';
        $class->lec_time_end = '13:00:00';
        $class->room = '129';
        $class->save();

        $class = new SClass;
        $class->class_id = 39;
        $class->section = '201-A';
        $class->instructor_id = 'K492';
        $class->course_code = 'Rizal';
        $class->acad_term_id = '192001';
        $class->lec_day = 'T';
        $class->lec_time_start = '14:00:00';
        $class->lec_time_end = '17:00:00';
        $class->room = '129';
        $class->save();

        $class = new SClass;
        $class->class_id = 40;
        $class->section = '101-A';
        $class->instructor_id = 'K521';
        $class->course_code = 'NSTP 1';
        $class->acad_term_id = '192001';
        $class->lec_day = 'M';
        $class->lec_time_start = '10:00:00';
        $class->lec_time_end = '13:00:00';
        $class->room = '105';
        $class->save();

        $class = new SClass;
        $class->class_id = 41;
        $class->section = '101-A';
        $class->instructor_id = 'K521';
        $class->course_code = 'PE 1';
        $class->acad_term_id = '192001';
        $class->lec_day = 'T';
        $class->lec_time_start = '11:00:00';
        $class->lec_time_end = '13:00:00';
        $class->room = '105';
        $class->save();

        $class = new SClass;
        $class->class_id = 42;
        $class->section = '201-A';
        $class->instructor_id = 'K521';
        $class->course_code = 'PE 3';
        $class->acad_term_id = '192001';
        $class->lec_day = 'W';
        $class->lec_time_start = '08:00:00';
        $class->lec_time_end = '10:00:00';
        $class->room = '105';
        $class->save();

        $class = new SClass;
        $class->class_id = 43;
        $class->section = '101-A';
        $class->instructor_id = 'K521';
        $class->course_code = 'Art1';
        $class->acad_term_id = '192001';
        $class->lec_day = 'M';
        $class->lec_time_start = '04:00:00';
        $class->lec_time_end = '07:00:00';
        $class->room = '105';
        $class->save();

        $class = new SClass;
        $class->class_id = 44;
        $class->section = '101-A';
        $class->instructor_id = 'K521';
        $class->course_code = 'Fil1';
        $class->acad_term_id = '192001';
        $class->lec_day = 'TH';
        $class->lec_time_start = '09:00:00';
        $class->lec_time_end = '12:00:00';
        $class->room = '105';
        $class->save();

        $class = new SClass;
        $class->class_id = 45;
        $class->section = '101-B';
        $class->instructor_id = 'K521';
        $class->course_code = 'NSTP 1';
        $class->acad_term_id = '192001';
        $class->lec_day = 'M';
        $class->lec_time_start = '01:00:00';
        $class->lec_time_end = '04:00:00';
        $class->room = '123';
        $class->save();

        $class = new SClass;
        $class->class_id = 46;
        $class->section = '101-B';
        $class->instructor_id = 'K521';
        $class->course_code = 'PE 1';
        $class->acad_term_id = '192001';
        $class->lec_day = 'F';
        $class->lec_time_start = '11:00:00';
        $class->lec_time_end = '13:00:00';
        $class->room = '123';
        $class->save();

        $class = new SClass;
        $class->class_id = 47;
        $class->section = '101-B';
        $class->instructor_id = 'K521';
        $class->course_code = 'Art1';
        $class->acad_term_id = '192001';
        $class->lec_day = 'T';
        $class->lec_time_start = '13:00:00';
        $class->lec_time_end = '16:00:00';
        $class->room = '123';
        $class->save();

        $class = new SClass;
        $class->class_id = 48;
        $class->section = '101-B';
        $class->instructor_id = 'K521';
        $class->course_code = 'Fil1';
        $class->acad_term_id = '192001';
        $class->lec_day = 'W';
        $class->lec_time_start = '16:00:00';
        $class->lec_time_end = '19:00:00';
        $class->room = '123';
        $class->save();

        $class = new SClass;
        $class->class_id = 49;
        $class->section = '101-C';
        $class->instructor_id = 'K521';
        $class->course_code = 'NSTP 1';
        $class->acad_term_id = '192001';
        $class->lec_day = 'M';
        $class->lec_time_start = '17:00:00';
        $class->lec_time_end = '20:00:00';
        $class->room = '105';
        $class->save();

        $class = new SClass;
        $class->class_id = 50;
        $class->section = '101-C';
        $class->instructor_id = 'K521';
        $class->course_code = 'PE 1';
        $class->acad_term_id = '192001';
        $class->lec_day = 'TH';
        $class->lec_time_start = '17:00:00';
        $class->lec_time_end = '20:00:00';
        $class->room = '105';
        $class->save();

        $class = new SClass;
        $class->class_id = 51;
        $class->section = '101-C';
        $class->instructor_id = 'K521';
        $class->course_code = 'Art1';
        $class->acad_term_id = '192001';
        $class->lec_day = 'F';
        $class->lec_time_start = '10:00:00';
        $class->lec_time_end = '13:00:00';
        $class->room = '105';
        $class->save();

        $class = new SClass;
        $class->class_id = 52;
        $class->section = '101-C';
        $class->instructor_id = 'K521';
        $class->course_code = 'Fil1';
        $class->acad_term_id = '192001';
        $class->lec_day = 'F';
        $class->lec_time_start = '13:00:00';
        $class->lec_time_end = '16:00:00';
        $class->room = '105';
        $class->save();
    }
}
