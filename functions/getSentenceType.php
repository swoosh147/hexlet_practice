<?php
// Реализуйте функцию getSentenceType, которая принимает на вход текст, определяет его тип и возвращает наружу его название. 
// Тип предложения определяется по последнему символу в тексте.

// ? - question
// ! - shouting
// Все остальное - common
// Если передана пустая строчка, то функция должна вернуть null.

// function getSentenceType($text){

// if ($text == ""){
//     return null;
// }

// $mas = str_split($text, 1);

//     if(array_pop($mas) == "?" ){
//         print_r('question');
//     }
//     else if(array_pop($mas) == "!"){
//         print_r('shouting');
//     }
//     else {
//         print_r('common');
//     }

// }
use Funct;
function getSentenceType($text){

if ($text == ""){
    return null;
}
$last = \Funct\Strings\right($text,1);
switch ($last){
    case "?" : return "question";
    case "!" : return "shouting";
    default : return "common";
}
}





var_dump(getSentenceType('what?'));
echo("\n");
var_dump(getSentenceType('wow!'));
echo("\n");
var_dump(getSentenceType('haha'));
