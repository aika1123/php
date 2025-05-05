<?php
/*function problem($score1, $score2, $score3)
{
    $total = $score1 + $score2 + $score3;
    if($total > 210){
        echo "合計点は" . $total . "なので合格です";
    }else{
        echo "合計点は" . $total . "なので不合格です";
    }
}

$result =problem(80, 90, 70);
echo $result;*/

function square($base, $height)
{
    $squareArea =$base * $height;
    return $squareArea;
}

function triangle($base, $height)
{
    $triangleArea =$base * $height /2;
    return $triangleArea;
}

function trapezoid($upperBase, $lowerBase, $height)
{
    $trapezoidArea=($upperBase + $lowerBase)*$height /2;
    return $trapezoidArea;
}

$squareAnswer = square(4, 5);
echo $squareAnswer ;
echo "<br />";

$triangleAnswer = triangle(6, 7);
echo $triangleAnswer;
echo "<br />";

$trapezoidAnswer = trapezoid(4, 6, 8);
echo $trapezoidAnswer;
