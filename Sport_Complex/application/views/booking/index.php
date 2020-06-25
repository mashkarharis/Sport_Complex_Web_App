<?php
require_once "calendar.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>MyCal</title>
</head>
<style>
body {background-color:#fff;
color:#000;}
.today{
    background:#fff;
    color:gold;
}
</style>
<body>
<?php
   if(isset($_GET['month'])&& isset($_GET['year'])&& isset($_GET['state'])){
        $month=$_GET['month'];
        $year=$_GET['year'];
        $state=$_GET['state'];
    }
    else{
        if (session_status()==PHP_SESSION_NONE) {
            session_start();
        }
        
        $dateComponents=getdate();
        $month=$dateComponents['mon'];
        $year=$dateComponents['year'];
        $state=0;
    }
    $calendar=new Calendar($month,$year,$state);
    $calendar->makeCalendar();
?>
    <!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>