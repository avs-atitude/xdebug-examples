<?php 

$students = [
    [ 'name' => 'Melissa Lima Pereira', 'grade' => 8],
    [ 'name' => 'Laura Santos Rodrigues', 'grade' => 10],
    [ 'name' => 'Maria Fabiana Jesus', 'grade' => 3],
    [ 'name' => 'Levi Fernando Anthony Ferreira', 'grade' => 1],
    [ 'name' => 'Francisca Bianca Daiane Lopes', 'grade' => 4],
    [ 'name' => 'Felipe Otávio Igor Silva', 'grade' => 7],
];

$grades = array_map(fn($student) => $student['grade'], $students);

$total = 0;

for ($i=0; $i < count($grades); $i++) { 
    $total += $grades[$i];
    $total += $total / count($students);
}

echo "A média dos alunos é {$total}";