<?php

function FizzBuzz($number)
{
    if ($number % 3 == 0 && $number % 5 == 0)
    {
        echo "FizzBuzz\n";
    }
    else if ($number % 3 == 0)
    {
        echo "Fizz\n";
    }
    else if ($number % 5 == 0)
    {
        echo "Buzz\n";
    }
    else
    {
        echo $number . "\n";
    }
}

for ($i=0; $i <100; $i++)
{
    FizzBuzz($i);
}

?>