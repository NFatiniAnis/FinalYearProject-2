<?php
    session_start();
    include('admin/db_connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="resume6.css">
</head>

<body>

<?php

$sel_query="Select * from resumedetails ORDER BY id DESC LIMIT 1;";
$result = mysqli_query($conn,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>

            <div class="container">
        <div class="left_Side">
            <div class="profileText">
                <div class="imgBx">
                <img src="./img/<?php echo $row['profile_picture']; ?>" alt="">
                </div>
                <h2><?php echo $row["first_name"]; ?><br><span><?php echo $row["job_position"]; ?></span></h2>
            </div>

            <div class="contactInfo">
            <h3 class="title">Contact Info</h3>
            <ul>
                <li>
                    <span class="icon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                    <span class="text">0900 786 01</span>
                </li>
                <li>
                    <span class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                    <span class="text"><?php echo $row["email"]; ?></span>
                </li>
                <li>
                    <span class="icon"><i class="fa fa-globe" aria-hidden="true"></i></span>
                    <span class="text">mywebsite.com</span>
                </li>
                <li>
                    <span class="icon"><i class="fa fa-linkedin" aria-hidden="true"></i></span>
                    <span class="text"><?php echo $row["media_social"]; ?></span>
                </li>
                <li>
                    <span class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                    <span class="text"><?php echo $row["address"]; ?></span>
                </li>
            </ul>
        </div> 
        <div class="contactInfo education">
            <h3 class="title">EDUCATION</h3>
            <ul>
                <li>
                   <h5><?php echo $row["graduation_date"]; ?></h5>
                   <h4><?php echo $row["course"]; ?></h4>
                   <h4><?php echo $row["institution"]; ?></h4>
                </li>
                <li>
                    <h5>2019 - 2021</h5>
                    <h4> Intermediate in Maths</h4>
                    <h4>College Name</h4>
                 </li>
                 <li>
                    <h5>2021 - Now</h5>
                    <h4>Undergraduate in Computer Science</h4>
                    <h4>University Name</h4>
                 </li>
            </ul>
        </div>

        <div class="contactInfo language">
            <h3 class="title">LANGUAGES</h3>
            <ul>
                <li>
                    <span class="text"><?php echo $row["language"]; ?></span>
                    <span class="percent"></span>
                    <div style="width: 90%;"></div>
                </li>
                <li>
                    <span class="text"><?php echo $row["language"]; ?></span>
                    <span class="percent"></span>
                    <div style="width: 80%;"></div>
                </li>
            </ul>
    </div>
    </div> 
    <div class="right_Side">
  <div class="about">
    <h2 class="title2">Profile</h2>
    <p><?php echo $row["description"]; ?></p>
  </div>
  <div class="about">
    <h2 class="title2">Experience</h2>
    <div class="box">
        <div class="year_company">
        <h5><?php echo $row["start_date"]; ?></h5>
<h5><?php echo $row["end_date"]; ?></h5>
<h5>Company Name</h5>
        </div>
        <div class="text">
        <h4><?php echo $row["job_title"]; ?></h4>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Porro exercitationem nesciunt, tenetur architecto omnis </p>
    </div>
</div>
  <div class="box">
    <div class="year_company">
<h5>2021 - present</h5>
<h5>Company Name</h5>
    </div>
    <div class="text">
    <h4>Data Analyist</h4>
    <p>Lorem ipsum,dolor sit amet consectetur adipisicing elit. Porro exercitationem nesciunt,tenetur architecto omnis </p>
</div>
</div>
</div>
<div class="about skills">
    <h2 class="title2">Professional Skills</h2>
<div class="box">
    <h4><?php echo $row["skill"]; ?></h4>
    <div class="percent">
    <div style="width:95%;"></div>
</div>
</div>
<div class="box">
    <h4>CSS</h4>
    <div class="percent">
    <div style="width: 70%;"></div>
</div>
</div>
<div class="box">
    <h4>JAVASCRIPT</h4>
    <div class="percent">
    <div style="width: 95%;"></div>
</div>
</div>
<div class="box">
    <h4>PYTHON</h4>
    <div class="percent">
    <div style="width:75%;"></div>
</div>
</div>
</div>        
<div class="About interest">
    <h2 class="title2">Interest</h2>
    <ul>
        <li><i class="fa fa-bar-chart" aria-hidden="true"></i>Trading</li>
        <li><i class="fa fa-laptop" aria-hidden="true"></i>Developing</li>
        <li><i class="fa fa-gamepad" aria-hidden="true"></i>Gaming</li>
        <li><i class="fa fa-briefcase" aria-hidden="true"></i>Business</li>
    </ul>
</div>
  </div>
</div>

<td align="center">
<a href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a>
</td>
<td align="center">
<a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a>
</td>
</tr>
<?php } ?>

</body>

</html>