<?php
    session_start();
    include('admin/db_connect.php');
    include('header.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="resume1.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cv resume</title>
</head>

<?php

$stmt = $conn->prepare("SELECT * FROM resumedetails WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();

$result = $stmt->get_result();
$row = $result->fetch_assoc();

?>

<body>
    <div class="container">
        <img src="wave.png" class="wave">

        <!-- profile section stare -->
        <div class="profilesection">
            <h1 class="name"><?php echo $row['firstname'];?></h1><br>
            <span id="so"><?php echo $lname; ?></span><br><br>
            <h2 style="font-size: 30px;">Profile :-</h2>
            <p class="para">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>Laboriosam quasi enim dicta iusto dolores, vel qui sapiente quis odio <br>facere saepe ratione autem sunt sed itaque reprehenderit <br>illum maxime?
                Dicta.
            </p>
        </div>
        <!-- profile section End-->

        <div class="backshado"></div>


        <!-- left section par  -->
        <div class="mainbox">

            <div class="box Exprience">
                <h2 class="hed">Exprience</h2><br><br><br>
                <h3 class="litelhed">Name of work title:-</h3>
                <span id="so">Company Name</span><br><br>
                <p class="para a">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam quasi enim dicta iusto dolores, vel qui sapiente quis odio illum maxime? Dicta.
                </p>
                <br>
                <h3 class="litelhed">Name of work title:-</h3>
                <span id="so">Company Name</span><br><br>
                <p class="para a">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam quasi enim dicta iusto dolores, vel qui sapiente quis odio illum maxime? Dicta.
                </p>
            </div>

            <div class="box educaion">
                <h2 class="hed">Education</h2><br><br><br>
                <h3 class="litelhed">Degree</h3>
                <div class="degree">
                    <div class="deg a">
                        <p>University Name<br>---------------------<br>----------</p>
                    </div>
                    <div class="deg b">
                        <p>Collage Name<br>---------------------<br>,2019-2023</p>
                    </div>
                </div>
                <div>
                    <h3 class="litelhed">Any Extra Qualifiction</h3><br>
                    <p class="deg">&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;add here ----------------------------------------------------------</p>
                </div>

            </div>

            <div class="box contact">
                <h3 class="hed a">Contact:-</h3><br>
                <table cellspacing="10px">
                    <tr>
                        <td>Phone No</td>
                        <td>:123654789</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>:sothelast2@gmail.com</td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td>: --------------</td>
                    </tr>
                </table>
            </div>
        </div>
        <!-- left section par  End-->


        <!-- right section start -->
        <div class="mainright">
            <div class="right a">
                <h2 class="hed c">Skills :-</h2><br>
                <table class="table" cellspacing="10px">
                    <tr>
                        <td id="tex">Coding</td>
                        <td> <progress max="100" value="89" min=0></progress><br></td>
                    </tr>
                    <tr>
                        <td id="tex">SEO</td>
                        <td> <progress max="100" value="79" min=0></progress><br></td>
                    </tr>
                    <tr>
                        <td id="tex">Hosting</td>
                        <td> <progress max="100" value="70" min=0></progress><br></td>
                    </tr>
                    <tr>
                        <td id="tex">Communication</td>
                        <td> <progress max="100" value="85" min=0></progress><br></td>
                    </tr>
                </table>
            </div>
            <div class="right b">
                <h2 class="hed c">Languages :-</h2><br>
                <p id="tex" style="margin-top: 30px;">1) English <br> 2) Greek <br> 3) Latin <br> 4) Chanise</p>
            </div>
            <div class="right c ">
                <h2 class="hed c">Awards :-</h2><br><br><br>
                <P id="tex">1) --------------------<br> <br>2) -----------------</P>
            </div>
            <div class="right d ">
                <h2 class="hed c">Certificate :-</h2><br><br><br>
                <p id="tex">1) HTML <br><br> 2) CSS <br><br> 3) Java-script <br><br> 4) R</p>
            </div>
        </div>
    </div>
        
</body>

</html>