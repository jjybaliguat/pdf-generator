<?php
require('utils/ovrf-generator.php');

function getEnrolledCourses(){
    return [
        [
            'code'=>'OJT 240',
            'subjectDescription'=>'On the Job Training (240 Hours)',
            'yearSec'=>'',
            'units'=>'3',
            'days'=>'',
            'time'=>'',
            'room'=>'',
        ],
        [
            'code'=>'OJT 240',
            'subjectDescription'=>'On the Job Training (240 Hours)',
            'yearSec'=>'',
            'units'=>'3',
            'days'=>'',
            'time'=>'',
            'room'=>'',
        ],
        [
            'code'=>'OJT 240',
            'subjectDescription'=>'On the Job Training (240 Hours)',
            'yearSec'=>'',
            'units'=>'3',
            'days'=>'',
            'time'=>'',
            'room'=>'',
        ],
        [
            'code'=>'OJT 240',
            'subjectDescription'=>'On the Job Training (240 Hours)',
            'yearSec'=>'',
            'units'=>'3',
            'days'=>'',
            'time'=>'',
            'room'=>'',
        ],
    ];
}

$enrolledCourses = getEnrolledCourses();
$isNewStudent = false;

$ovrf = new Student_OVRF();
$ovrf->setName('Baliguat', 'Justine Jerald', 'Y');
$ovrf->setStudentNumber('21-01530');
$ovrf->setCourse('BSCPE');
$ovrf->setAcademicYear('2023-2024');
$ovrf->setSemester('summer');
$ovrf->setYearLevel('4');
$ovrf->setComputerFee('0.00');
$ovrf->setLaboratoryFee('0.00');
if($isNewStudent){
    $ovrf->setSchoolIdFee('0.00');
    $ovrf->setAdmissionFee('0.00');
}
$ovrf->setSubjects($enrolledCourses);

$ovrf->generateOvrf();

?>