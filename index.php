<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <input type="number" name="inp" placeholder="enter number">
    <input type="submit" placeholder="Change" name="switch">
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $number = $_POST['inp'];
    function oneNumber($one)
    {
        switch ($one) {
            case 1:
                echo 'one';
                break;
            case 2:
                echo 'two';
                break;
            case 3:
                echo 'three';
                break;
            case 4:
                echo 'four';
                break;
            case 5:
                echo 'five';
                break;
            case 6:
                echo 'six';
                break;
            case 7:
                echo 'seven';
                break;
            case 8:
                echo 'eight';
                break;
            case 9:
                echo 'nine';
                break;
        }
    }

    function twoNumber($two)
    {
        switch ($two) {
            case 10:
                echo 'ten';
                break;
            case 11:
                echo 'eleven';
                break;
            case 12:
                echo 'twelle';
                break;
            case 13:
                echo "Thirteen";
                break;
            case 14:
                echo "Fourteen";
                break;
            case 15:
                echo "Fifteen";
                break;
            case 16:
                echo "Sixteen";
                break;
            case 17:
                echo "Seventeen";
                break;
            case 18:
                echo "Eighteen";
                break;
            case 19:
                echo "Nineteen";
                break;
        }
    }

    function hundred($hundred)
    {
        oneNumber($hundred);
        echo 'hundred';
    }

    function number($three)
    {
        switch ($three) {
            case 2:
                echo "Twenty";
                break;
            case 3:
                echo "Thirty";
                break;
            case 4:
                echo "Forty";
                break;
            case 5:
                echo "Fifty";
                break;
            case 6:
                echo "Sixty";
                break;
            case 7:
                echo "Seventy";
                break;
            case 8:
                echo "Eighty";
                break;
            case 9:
                echo "Ninety";
                break;
        }
    }
}
if ($number == 0) {
    echo "zero";
} elseif ($number > 0 && $number < 10) {
    oneNumber($number);
} elseif ($number >= 10 && $number < 20) {
    twoNumber($number);
} elseif ($number >= 20 && $number < 100) {
    number($number[0]);
    oneNumber($number[1]);
} elseif ($number >= 100 && $number < 1000) {
    $hundred = $number[0];
    $ten = $number[1];
    $one = $number[2];
    if ($number == 100) {
        hundred($hundred);
    } elseif ($ten == 1) {
        hundred($hundred);
        echo " and ";
        twoNumber($ten . $one);
    } else {
        hundred($hundred);
        echo " and ";
        number($ten);
        oneNumber($one);
    }
}
?>
</body>
</html>
