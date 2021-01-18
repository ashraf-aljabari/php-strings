<?php


$questionOneStr ='i love playing with react code';
echo "<br>";

//Question 1

echo ( $questionOneStr ) ;
echo "<br>";
// a
echo strtoupper ( $questionOneStr ) ;
echo "<br>";
// b
echo strtolower ( $questionOneStr ) ;
echo "<br>";
// c
echo ucfirst ( $questionOneStr ) ;
echo "<br>";
//d
echo ucwords   ( $questionOneStr ) ;
echo "<br>";



//Question 2
$questionTwoStr = "082307";
$outputOne = str_split($questionTwoStr, "2");
$outputTwo = implode(":", $outputOne);
echo $outputTwo."<br>";



//Question 3
$questionThreeStr = 'he quick brown fox jumps over the lazy dog';
if(strchr($questionThreeStr,"jumps"))
{
    echo 'The word exist in the sentence'."<br>";
}
else {
    echo 'the word don\'t exist in the sentence'."<br>";
}



//Question 4
$questionFourStr = 'www.example.com/public_html/index.php';
$outputThree= substr(strrchr($questionFourStr, "/"), 1);
echo $outputThree."<br>";




//Question 5
echo strtok("Orange@example.com", "@");
echo"<br>";


//Question 6
$questionSixStr ='Orange@example.com';
echo  substr($questionSixStr ,-3)."<br>";



//Question 7
function passwordEncrypt($ex7)
{
    $questionFiveStr = "ewf465e4wafweafd46weq8fdwqe56f";
    return substr(str_shuffle($questionFiveStr), 0, $ex7);
}
echo passwordEncrypt(8)."<br>";



//Question 8

$questionEightStr =  'the quick brown fox jumps over the lazy dog';

echo str_replace('the', 'That',$questionEightStr)."<br>";



//Question 9
$questionNineStr1 = 'football';
$questionEightStr2 = 'footboll';
$str_pos = strspn($questionNineStr1 ^ $questionEightStr2, "\0");
printf('First difference between two strings at position %d: "%s" vs "%s"',
    $str_pos, $questionNineStr1[$str_pos], $questionEightStr2[$str_pos])."<br>";




//Question 10
$questionTenStr = "Twinkle, twinkle, little star,\nHow I wonder what you are.\nUp above the world so high,\nLike a diamond in the sky.";
$questionArrTen = explode("\n", $questionTenStr);
var_dump($questionArrTen)."<br>";



//Question 11
$questionElevenCha = 'z';
$next_questionElevenCha = ++$questionElevenCha;
if (strlen($next_questionElevenCha) > 1)
{
    $next_questionElevenCha = $next_questionElevenCha[0];
}
echo $next_questionElevenCha."<br>";




//Question 12
$questionTwelveStr = 'orange@example.com';
echo substr($questionTwelveStr, 6)."<br>";




//Question 13
$questionThirteenStr = 'The brown fox';
echo substr_replace($questionThirteenStr, 'quick ', 4, 0)."<br>";



//Question 14
echo substr("The quick brown fox",0,3)."<br>";




//Question number 15
echo ltrim("000547023.24", "0")."<br>";




//Question 16
$questionSixteenStrSub = 'fox';
$questionSixteenStr = 'The quick brown fox jumps over the lazy dog';
if (substr($questionSixteenStr, 0, strlen($questionSixteenStrSub)) == $questionSixteenStrSub)
{
    $questionSixteenStr = substr($questionSixteenStr, strlen($questionSixteenStrSub));
}
echo $questionSixteenStr."<br>";





//Question 17
// the original string
$questionSeventeenStr ='The quick brown fox jumps over the lazy dog///';
echo  trim($questionSeventeenStr , '///')."<br>";



//Question 18
$questionEighteenStr = 'http://www.example.com/5478631';
echo substr($questionEighteenStr, strrpos($questionEighteenStr, '/' )+1)."<br>";



//Question 19
$questionNineteenStr = '\"\1+2/3*2:2-3/4*3';
echo str_replace(str_split('\\/:*?"<>|+-'), ' ', $questionNineteenStr)."<br>";





//Question number 20
$questionTwentyStr = "The quick brown fox jumps over the lazy dog";
echo implode(" ", array_slice(explode(" ", $questionTwentyStr), 0, 5))."<br>";



//Question 21
echo str_replace(",", "", "2,543.12")."<br>";



//Question 22
for ($x = ord('a'); $x <= ord('z'); $x++)
    echo chr($x)."<br>";

