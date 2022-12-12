<?php

echo "this h.w 4";
echo "</br>";
echo "</br>";

echo "global variable :";
echo "</br>";
echo "</br>";

$result = 10;

function dekha_jak(){

  
    global $result;
    echo $result;
    
}
dekha_jak();


echo "</br>";
echo "</br>";
echo "loccal veriable scope :";
echo "</br>";
echo "</br>";

function cholo_dekhi(){

    $number = 200;
    return $number;
    
}
echo cholo_dekhi();


echo "</br>";
echo "</br>";
echo "static variable scope :";
echo "</br>";
echo "</br>";

function calculate($taka){
    static $money = 300;
    $money += $taka;
    echo $money . "</br>";
}
calculate(200);
calculate(100);

echo "</br>";
echo "</br>";
echo "Indexing Array :";

$writer = [
    "Akash", "Jamal", "Kamal"
];

echo "<pre>";
print_r($writer);
echo "</br>";
echo "calling a specific information from Array";
echo "</br>";
print_r($writer[1]);
echo "</br>";
echo "changing an array value of spacific index:";
$writer[0] = "Akash is repleced with batash";
echo "</br>";
echo "</br>";
print_r($writer);
echo "</pre>";

echo "</br>";
echo "</br>";
echo "Associative Array :";

$book = [
    "akash" => "akash o meghera",
    "jamal" => "jibon er kota",
    "karim" => "ochin manush"
];

echo "<pre>";
print_r($book);
echo "</br>";
echo "calling a specific information from Associative Array";
echo "</br>";
print_r($book ["akash"]);
echo "</br>";
echo "changing an array value of spacific index:";

$book["akash"] = "'Akash o megheder kota' is repleced with 'batash o bristir kota'";
echo "</br>";
echo "</br>";
print_r($book);
echo "</pre>";

echo "</br>";
echo "</br>";
echo "Multidimantional Array :";

$writer_and_book = [
    "Akash"=> ["golpo"=>"Akash o megeder kota",
    "Kobita" => "cholo paltai"],

    "Jamal" => ["golpo" => "Jibon er kota",
    "kobita"=> "joben mrittur dike"],

    "Karim" => ["golpo" => "ochin manush",
    "kobita" => "ochin pate haria jai "]
];
 
echo "<pre>";
print_r($writer_and_book);
echo "</br>";
echo "</br>";
echo "calling a specific information from nested array";
echo "</br>";
print_r($writer_and_book["Akash"]["golpo"]);
echo "</br>";
echo "changing a specific information from nested array";
$writer_and_book["Akash"]["golpo"] = "batash o bristir kota";
echo "</br";
print_r($writer_and_book);
echo "</pre> <br>";

$uname = "Hasan";
echo strtoupper($uname), "<br>";
echo strtolower($uname), "<br>";
echo str_shuffle($uname), "<br>";
echo strtoupper($uname), "<br>";
echo strrev($uname), "<br>";
printf("This is username %s", ucwords($uname));
echo "<br>";
echo strpos($uname, "n"), "<br>";
$upass = "password123" ;
echo "****";
echo "<br>";
echo md5($upass), "<br>";
$pass_hash = password_hash($upass, PASSWORD_BCRYPT);
echo password_hash($upass, PASSWORD_BCRYPT), "<br>", "<br> password checker ", "<br>";

function passcheck($pass){
    global $upass;
    global $pass_hash;
    if($pass_hash == $pass){
        echo "welcome to your account!";

    }
    else{
        echo "please give me your correct password";
    }
}
passcheck($pass_hash);
echo "<br>";
passcheck("kjdfkdj");

echo "<br>";
echo "<br>";
echo "Account creator";
echo "<br>";
function account_creat( $u_name,$u_pass){
    $u_name = strlen($u_name);
    $u_pass = strlen($u_pass);

    if($u_name and $u_pass >= 8 ){
        echo "your account is created!";
    } else {
        echo "username and password must be 8 charecter long";
    }
    
}
account_creat("hellow", "hi");
echo "<br>";
account_creat("this is my username " , "this is my password");


