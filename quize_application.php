<?php

$score = 2;
$total = 3;

echo " Welcome to the Terminal Quiz Application\n";

// Question 1
echo "1.Which search engine is the most widely used globaly?\n";
echo "a) Yahoo\n";
echo "b) Google\n";
echo "c) Bing\n";
echo "Your answer (a/b/c): ";

$answer1 = trim(fgets(STDIN));

if ($answer1 == "b") {
    echo "Correct!\n";
    $score++;
} else {
    echo "Wrong. The correct answer is b) Google\n";
}

// Question 2
echo "2. What is the full form of CTR in Digital Marketing?\n";
echo "a) Content Traffic Reach\n";
echo "b) Cuatomer Tracking Report\n";
echo "c) Click Throug Rate\n";
echo "Your answer (a/b/c): ";

$answer2 = trim(fgets(STDIN));

if ($answer2 == "c") {
    echo "Correct!\n";
    $score++;
} else {
    echo "Wrong. The correct answer is c) Click Throug Rate\n";
}

// Question 3
echo "3. What is the full form of SEO?\n";
echo "a) Search Engine Optimization\n";
echo "b) Social Engagement Optimization\n";
echo "c) Search Engine Operation\n";
echo "Your answer (a/b/c): ";

$answer3 = trim(fgets(STDIN));

if ($answer3 == "a") {
    echo "Correct!\n";
    $score++;
} else {
    echo "Wrong. The correct answer is a)Search Engine Optimization\n";
}

// Final Score
echo "==\n";
echo "Quiz Completed!\n";
echo "You got $score out of $total correct\n";
echo "==\n";
?>