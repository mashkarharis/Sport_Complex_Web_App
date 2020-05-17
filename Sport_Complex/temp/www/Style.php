<?php
header("Content-type: text/css");

    $margin= 0;
    $padding= 0;
    $font_family = 'Century Gothic';
?>

h1{
    text-align: center;
    padding: 20px;
    color: white;
}
.register{
    background: rgb(163, 158, 158);
    width: 500px;
    margin: 0px 0px 0px 50px;
    color: white;
    font-size: 18px;
    padding: 25px;
    border-radius: 10px;
    margin-bottom: 5px;
}
#register{
    margin-left: 50px;
}
label{
    color: white;
    font-size: 18px;
    font-style: italic;
}
#name{
    width: 300px;
    height: 30px;
    border: none;
    outline: 0;
    padding: 3px;
    border-radius: 3px;
}
body{
    background-image: url(../Image/1.jpg);
    background-size: 100% 780px;
    background-repeat: no-repeat;
}
ul{
    float: right;
    list-style-type: none; 
    margin-top: 29px;
    margin-right: 30px;
    cursor: pointer;
}
ul li{
    display: inline-block;
}
ul li a{
    text-decoration: none;
    color: white;
    padding: 5px 20px;
    border: 1px solid white;
    transition: 0.6s ease;
}
ul li a:hover{
    background-color: white;
    color: black;

}
ul1{
    float: right;
    list-style-type: none; 
    margin-top: -8px;
    margin-right: 30px;
    cursor: pointer;
}
ul1 li{
    display: inline-block;
}
ul1 li a{
    text-decoration: none;
    color: white;
    padding: 5px 20px;
    border: 1px solid white;
    transition: 0.6s ease;
}
ul1 li a:hover{
    background-color: white;
    color: black;

}
input{
    width: 40%;
    height: 5%;
    border: 1px;
    border-radius: 5px;
    padding: 8px;
    margin: 10px;
    box-shadow: 1px;
}