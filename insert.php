<?php
require_once'dbconfig.php';
if(isset($_POST['insert']))
{

// Posted Values  
$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$emailid=$_POST['emailid'];
$contactno=$_POST['contactno'];
$address=$_POST['address'];


$sql="INSERT INTO tblusers(Name,Pincode,EmailId,ContactNumber,Dob) VALUES(:fn,:ln,:eml,:cno,:adrss)";

$query = $dbh->prepare($sql);

$query->bindParam(':fn',$fname,PDO::PARAM_STR);
$query->bindParam(':ln',$lname,PDO::PARAM_STR);
$query->bindParam(':eml',$emailid,PDO::PARAM_STR);
$query->bindParam(':cno',$contactno,PDO::PARAM_STR);
$query->bindParam(':adrss',$address,PDO::PARAM_STR);

$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{

echo "<script>alert('Record inserted successfully');</script>";
echo "<script>window.location.href='index.php'</script>"; 
}
else 
{

echo "<script>alert('Something went wrong. Please try again');</script>";
echo "<script>window.location.href='index.php'</script>"; 
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Saurabh Saraswat  </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">

<div class="row">
<div class="col-md-12">
<h3>Saurabh Saraswat crud Operations</h3>
<hr />
</div>
</div>


<form name="insertrecord" method="post">
<div class="row">
<div class="col-md-4"><b>NAME</b>
<input type="text" name="firstname" class="form-control" required>
</div>
<div class="col-md-4"><b>PINCODE</b>
<input type="text" name="lastname" class="form-control" required>
</div>
</div>

<div class="row">
<div class="col-md-4"><b>Email id</b>
<input type="email" name="emailid" class="form-control" required>
</div>
<div class="col-md-4"><b>MOBILE NUMBER</b>
<input type="text" name="contactno" class="form-control" maxlength="10" required>
</div>
</div>  



<div class="row">
<div class="col-md-8"><b>DOB</b>
<input type="date" class="form-control" name="address" required></textarea>
</div>
</div>  

<div class="row" style="margin-top:1%">
<div class="col-md-8">
<input type="submit" name="insert" value="Submit">
</div>
</div> 
     
         

</form>
  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

           
</div>
</div>
</body>
</html>