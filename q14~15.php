<?php

class Student
{
    public $studentId;
    public $name;

    public function __construct($studentId, $name)
    {
        $this->studentId = $studentId;
        $this->name = $name;
    }

    public function attend($subject)
    {
        echo $this->name . 'は' . $subject . 'の授業に出席しました。学籍番号:' . $this->studentId;
    }
}

$yamada = new Student(25, '山田');
echo '学籍番号' . $yamada->studentId . 'の生徒は' . $yamada->name . 'です。' . "\n";

$yamada = new Student(120, '山田');
$yamada->attend('PHP');

