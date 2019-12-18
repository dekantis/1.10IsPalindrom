<?php

/*Задача: Найти все меньшие N числа-палиндромы,
которые при возведении в квадрат дают палиндром.*/

//Является ли число палиндромом
function isPalindrome(int $number)
{
    $squareNumber = $number**2;
    $reverseNumb = $squareNumber%10;
    $squareNumber = $squareNumber/10;
    $pow = 1;
    while ((int)($squareNumber/10**$pow) > 0) {  //Проверка на середину числа 
        $reverseNumb = $reverseNumb*10+$squareNumber%10;
        $squareNumber = (int)($squareNumber/10);
        $pow++;
    }
   return $pow%2 == 0 ? $squareNumber*10 + $reverseNumb%10 == $reverseNumb: $squareNumber == $reverseNumb;
}

$N = 1234; //Натуральное число
for ($i=1; $i<=$N; $i++) {
    if (isPalindrome($i)||$i==1) {
        echo "Квадрат натурального числа " . $i." является палиморофм ".($i**2)."\n";
    };
}

