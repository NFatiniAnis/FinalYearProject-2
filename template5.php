<?php
    session_start();
    include('admin/db_connect.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="resume5.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <title>Resume</title>
</head>

<body>

<?php

$sel_query="Select * from resumedetails ORDER BY id DESC LIMIT 1;";
$result = mysqli_query($conn,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>

<section class="main-section">
        <div class="left-part">
            <div class="photo-container">
            <img src="./img/<?php echo $row['profile_picture']; ?>" alt="">
            </div>

            <div class="contact-container">
                <h2 class="title">Contact Me</h2>
                <div class="contact-list">
                    <div class="icon-container">
                        <i class="bi bi-geo-alt-fill"></i>
                    </div>
                    <div class="contact-text">
                        <p><?php echo $row["address"]; ?></p>
                    </div>
                </div>
                <div class="contact-list">
                    <div class="icon-container">
                        <i class="bi bi-envelope-fill"></i>
                    </div>
                    <div class="contact-text">
                        <p><?php echo $row["email"]; ?></p>
                    </div>
                </div>
                <div class="contact-list">
                    <div class="icon-container">
                        <i class="bi bi-laptop"></i>
                    </div>
                    <div class="contact-text">
                        <p>www.reallygreatsite.com</p>
                    </div>
                </div>
                
                <div class="contact-list">
                    <div class="icon-container">
                        <i class="bi bi-linkedin"></i>
                    </div>
                    <div class="contact-text">
                        <p><?php echo $row["media_social"]; ?></p>
                    </div>
                </div>
            </div>
            <div class="education-container">
                <h2 class="title">Education</h2>
                <div class="course">
                    <h2 class="education-title"><?php echo $row["course"]; ?></h2>
                    <h5 class="college-name"><?php echo $row["institution"]; ?></h5>
                    <p class="education-date"><?php echo $row["graduation_date"]; ?></p>
                </div>
                <div class="course">
                    <h2 class="education-title">Course Studied</h2>
                    <h5 class="college-name">University/College Details</h5>
                    <p class="education-date">2006 - 2008</p>
                </div>
                <div class="course">
                    <h2 class="education-title">Course Studied</h2>
                    <h5 class="college-name">University/College Details</h5>
                    <p class="education-date">2006 - 2008</p>
                </div>
            </div>
                
                <div class="skills-container">
                <h2 class="title">Skills</h2>
                <div class="skill">
                    <div class="left-skill">
                        <p><?php echo $row["skill"]; ?></p>
                    </div>
                    <div class="right-skill">
                        <div class="outer-layer">
                            <div class="inner-layer" style="width: 60%;"></div>
                            </div>
                    </div>
                </div>
                <div class="skill">
                    <div class="left-skill">
                        <p>Skill Name 01</p>
                    </div>
                    <div class="right-skill">
                        <div class="outer-layer">
                            <div class="inner-layer" style="width: 90%;"></div>
                        </div>
                    </div>
                </div>
                <div class="skill">
                    <div class="left-skill">
                        <p>Skill Name 02</p>
                    </div>
                    <div class="right-skill">
                        <div class="outer-layer">
                            <div class="inner-layer" style="width: 40%;"></div>
                        </div>
                    </div>
                </div>
                <div class="skill">
                    <div class="left-skill">
                        <p>Skill Name 03</p>
                    </div>
                    <div class="right-skill">
                        <div class="outer-layer">
                            <div class="inner-layer" style="width: 60%;"></div>
                        </div>
                    </div>
                </div>
                <div class="skill">
                    <div class="left-skill">
                        <p>Skill Name 04</p>
                    </div>
                    <div class="right-skill">
                        <div class="outer-layer">
                            <div class="inner-layer" style="width: 70%;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                
                <div class="right-part">
            <div class="banner">
                <h1 class="firstname"><?php echo $row["first_name"]; ?></h1>
                <h1 class="lastname"><?php echo $row["last_name"]; ?></h1>
                <p class="position"><?php echo $row["job_position"]; ?></p>
            </div>
            
            <div class="work-container ">
                <h2 class="title text-left">work experience</h2>
                <div class="work">
                    <div class="job-date">
                        <p class="job"><?php echo $row["job_title"]; ?></p>
                        <p class="date"><?php echo $row["start_date"]; ?></p>
                        <p class="date"><?php echo $row["end_date"]; ?></p>
                    </div>
                    <h2 class="company-name">Company Name l Location</h2>
                    <p class="work-text"><?php echo $row["description"]; ?></p>
                </div>
                <div class="work">
                    <div class="job-date">
                        <p class="job"><?php echo $row["intern_job"]; ?></p>
                        <p class="date"><?php echo $row["internStart_date"]; ?></p>
                        <p class="date"><?php echo $row["internEnd_date"]; ?></p>
                    </div>
                    <h2 class="company-name"><?php echo $row["intern_job"]; ?></h2>
                    <p class="work-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam pharetra in
                        lorem
                        at laoreet. Donec hendrerit libero eget est tempor, quis tempus arcu elementum. In elementum
                        elit at
                        dui tristique feugiat. Mauris convallis, mi at mattis malesuada, neque nulla volutpat dolor,
                        hendrerit faucibus eros nibh ut nunc. Proin luctus urna i</p>
                </div>
                <div class="work">
                    <div class="job-date">
                        <p class="job">Job position here</p>
                        <p class="date">2019 - 2022</p>
                    </div>
                    <h2 class="company-name">Company Name l Location</h2>
                    <p class="work-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam pharetra in
                        lorem
                        at laoreet. Donec hendrerit libero eget est tempor, quis tempus arcu elementum. In elementum
                        elit at
                        dui tristique feugiat. Mauris convallis, mi at mattis malesuada, neque nulla volutpat dolor,
                        hendrerit faucibus eros nibh ut nunc. Proin luctus urna i</p>
                </div>
            </div>
            <div class="references-container">
                <h2 class="title text-left">References</h2>
                <div class="references">
                    <div class="left-references">
                        <h4 class="name"><?php echo $row["referent_name"]; ?></h4>
                        <p class="company-name"><?php echo $row["company"]; ?></p>
                        <div class="phone">
                            <div class="phone-text">
                                <p>Phone : <?php echo $row["referent_phone"]; ?></p>
                                <p>Email : <?php echo $row["referent_email"]; ?></p>
                            </div>
                            <div class="phone-number">
                                <p>123-456-7890</p>
                                <p>hello@reallygreatsite.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="right-references">
                        <h4 class="name">Name Surname</h4>
                        <p class="company-name">Job position, Company Name</p>
                        <div class="phone">
                            <div class="phone-text">
                                <p>Phone:</p>
                                <p>Email:</p>
                            </div>
                            <div class="phone-number">
                                <p>123-456-7890</p>
                                <p>hello@reallygreatsite.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


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