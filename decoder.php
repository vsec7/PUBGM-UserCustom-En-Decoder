<html>
<center>
<h1> Simple En/De UserCustom.ini PUBGM </h1>
<form method="post">
<textarea cols=50 rows=10 name="str" placeholder="+CVars=r.PUBGQualityLevel=2">
</textarea><br>
<select size="1" name="opt">
<option value="enc">Encode</option>
<option value="dec">Decode</option>
</select>
<input type="submit">
</form>

<?php

/*--------------------------------------------
# Simple Encoder / Decoder Config Pubg Mobile
# By Versailles
--------------------------------------------*/


$chars = array(
    '1' => '48',
    '2' => '4B',
    '3' => '4A',
    '4' => '4D',
    '5' => '4C',
    '6' => '4F',
    '7' => '4E',
    '8' => '41',
    '9' => '40',
    '0' => '49',
    'A' => '38',
    'B' => '3B',
    'C' => '3A',
    'D' => '3D',
    'E' => '3C',
    'F' => '3F',
    'G' => '3E',
    'H' => '31',
    'I' => '30',
    'J' => '33',
    'K' => '32',
    'L' => '35',
    'M' => '34',
    'N' => '37',
    'O' => '36',
    'P' => '29',
    'Q' => '28',
    'R' => '2B',
    'S' => '2A',
    'T' => '2D',
    'U' => '2C',
    'V' => '2F',
    'W' => '2E',
    'X' => '21',
    'Y' => '20',
    'Z' => '23',
    'a' => '18',
    'b' => '1B',
    'c' => '1A',
    'd' => '1D',
    'e' => '1C',
    'f' => '1F',
    'g' => '1E',
    'h' => '11',
    'i' => '10',
    'j' => '13',
    'k' => '12',
    'l' => '15',
    'm' => '14',
    'n' => '17',
    'o' => '16',
    'p' => '09',
    'q' => '08',
    'r' => '0B',
    's' => '0A',
    't' => '0D',
    'u' => '0C',
    'v' => '0F',
    'w' => '0E',
    'x' => '01',
    'y' => '00',
    'z' => '03',
    '=' => '44',
    '.' => '57'
);

function enc($s)
{
    global $chars;
    foreach (explode("\n", $s) as $str) {
        $res[] = "+CVars=" . strtr(substr($str, 7), $chars);
    }
    return implode("\n", $res);
}

function dec($s)
{
    global $chars;
    foreach (explode("\n", $s) as $str) {
        $res[] = "+CVars=" . strtr(substr($str, 7), array_flip($chars));
    }
    return implode("\n", $res);
}


$str = $_POST["str"];
if (isset($str)) {
    
    switch ($_POST["opt"]) {
        case "enc":
            $res = enc($str);
            break;
        case "dec":
            $res = dec($str);
            break;
        default:
            break;
    }
    
    
    echo "<textarea cols=50 rows=10 placeholder='result'>" . $res . "</textarea>";
}
?>

</html>
