<?php

require_once 'Student.php';
require_once 'StudentsList.php';

function runTest() {
    $list = new StudentsList();

    $student1 = new Student("Иванов", "Сергей", "ФМиИТ", 3, "303");
    $student2 = new Student("Петров", "Алексей", "ФМиИТ", 2, "201");

    $list->add($student1);
    $list->add($student2);

    echo "Количество студентов: " . $list->count() . PHP_EOL;
    echo $list->get(0) . PHP_EOL;
    echo $list->get(1) . PHP_EOL;

    $list->store('students.dat');
    $list->load('students.dat');

    echo "После загрузки из файла: " . PHP_EOL;
    echo $list->get(0) . PHP_EOL;
    echo $list->get(1) . PHP_EOL;
}

?>
