<?php
include("admin/db_connect.php");

$id=$_REQUEST['id'];
$query = "SELECT * from resumedetails where id='".$id."'"; 
$result = mysqli_query($conn, $query) or die ( mysqli_error($conn));
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update Resume</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p><a href="dashboard.php">Dashboard</a> 
| <a href="insert.php">Insert New Record</a> 
| <a href="logout.php">Logout</a></p>
<h1>Update Resume</h1>
<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
    $id=$_REQUEST['id'];
    $fname =$_REQUEST['first_name'];
    $age =$_REQUEST['last_name'];
    $update="update resumedetails set trn_date='".$trn_date."',
    first_name='".$fname."', last_name='".$lname."'
    where id='".$id."'";
    mysqli_query($conn, $update) or die(mysqli_error($conn));
    $status = "Resume Updated Successfully. </br></br>
    <a href='templatecubacuba.php'>View Updated Resume</a>";
    echo '<p style="color:#FF0000;">'.$status.'</p>';
    }else {
    ?>
    <div>
    <form name="form" method="post" action=""> 
    <input type="hidden" name="new" value="1" />
    <input name="id" type="hidden" value="<?php echo $row['id'];?>" />
    <p><input type="text" name="first_name" placeholder="Enter First Name" 
    required value="<?php echo $row['first_name'];?>" /></p>
    <p><input type="text" name="last_name" placeholder="Enter Last Name" 
    required value="<?php echo $row['last_name'];?>" /></p>
<p><input name="submit" type="submit" value="Update" /></p>
</form>
<?php } ?>
</div>
</div>
</body>
</html>