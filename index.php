<?php
require('utils/ovrf-generator.php');

$ovrf = new Student_OVRF();
$ovrf->setName('Compra', 'Iza', 'M');
$ovrf->setStudentNumber('22-00760');
$ovrf->setCourse('BSBA');
$ovrf->setAcademicYear('2023-2024');
$ovrf->setSemester('summer');
$ovrf->setYearLevel('1');
$ovrf->setComputerFee('0.00');
$ovrf->setLaboratoryFee('0.00');
$ovrf->setSubjects(Array(
    array(
        'code'=>'OJT 240',
        'subjectDescription'=>'On the Job Training (240 Hours)',
        'yearSec'=>'',
        'units'=>'3',
        'days'=>'',
        'time'=>'',
        'room'=>'',
    ),
));

$ovrf->generateOvrf();

?>