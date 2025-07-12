<?php

$questions = [
    ['questions' => 'Which course we are learing','correct'=> 'Web Development'],
    ['questions' => 'What is the capital of BD','correct'=> 'Dhaka'],
    ['questions' => 'Last World Cup winner','correct'=> 'Argentina'],
    ['questions' => 'Who is the GOAT of Football','correct'=> 'Leo Messi'],
    ['questions' => 'Who made us Fly away','correct'=> 'Apa'],
    ['questions' => 'What is the date of 36th July','correct'=> '5 Aug'],
    ['questions' => 'How many students die for his country','correct'=> 'More then 1000'],
    ['questions' => 'Who is the Chief Advisor of BD','correct'=> 'Dr Yunus'],
    ['questions' => 'Desh netar koto %','correct'=> '10'],
    ['questions' => 'Which is the Best online Learing platform','correct'=> 'Ostad'],
] ;

$answers = [] ;

foreach ($questions as $index => $question) {
    echo($index + 1) .".". $question['questions'] ."\n";
    $answers [] = trim(readline("Your answer : "));
}

function evaluateQuiz(array $questions, array $answers): int 
{
    $score = 0; 
    foreach ($questions as $index => $question) {
        if($answers[$index] === $question['correct']) {
            $score ++;
        }
    }

    return $score;
}

$myscore = evaluateQuiz($questions, $answers);

echo "\nYour Scored $myscore out of ". count($questions). ".\n";

if($myscore === count($questions)) {
    echo "Excellent job !!! \n";
}elseif($myscore >= 1){
    echo "Good job bro";
}else{
    echo "Thats not good, you fail.Try Again";
}