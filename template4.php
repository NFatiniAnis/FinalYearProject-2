<?php
    session_start();
    include('admin/db_connect.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Resume 4</title>
	<link rel="stylesheet" type="text/css" href="resume4.css">
	<script src="https://kit.fontawesome.com/3ef3559250.js" crossorigin="anonymous"></script>
</head>
<body>

<?php

$sel_query="Select * from resumedetails ORDER BY id DESC LIMIT 1;";
$result = mysqli_query($conn,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>

<section class="resume">
	<div class="resume_left">
	    <div class="r_profile_pic">
        <img src="./img/<?php echo $row['profile_picture']; ?>" alt="">
	    </div>

        <div class="r_left_sub">
	      <div class="r_aboutme">
	        <h2>About me</h2>
	        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa earum optio id iure reprehenderit accusamus quisquam accusantium nulla? Dolorum ipsa sed perspiciatis nemo aliquam quibusdam, alias quae totam nulla nihil.</p>
	      </div>
	      <div class="r_skills">
	        <h2>Skills</h2>
	        <ul>
	          <li>
	            <p><i class="fa-solid fa-code"></i></p>
	            <p><?php echo $row["skill"]; ?></p>
	          </li>
	          <li>
	            <p><i class="fa-solid fa-pen-nib"></i></p>
	            <p>Web Designing</p>
	          </li>
	          <li>
	            <p><i class="fa-solid fa-video"></i></p>
	            <p>Video Editing</p>
	          </li>
	          <li>
	            <p><i class="fa-solid fa-headphones"></i></p>
	            <p>Sound Mixing</p>
	          </li>
	          <li>
	            <p><i class="fa-solid fa-image"></i></p>
	            <p>Photoshop Editing</p>
	          </li>
	        </ul>
	      </div>
          <div class="r_hobbies">
	        <h2>Hobbies</h2>
	        <ul>
	          <li>
	            <p><?php echo $row["hobbies"]; ?></i></p>
	          </li>
	          <li>
	            <p><i class="fa-solid fa-plant-wilt"></i></p>
	          </li>
	          <li>
	            <p><i class="fa-solid fa-book"></i></p>
	          </li>
	          <li>
	            <p><i class="fa-solid fa-bicycle"></i></p>
	          </li>
	          <li>
	            <p><?php echo $row["hobbies"]; ?></i></p>
	          </li>
	        </ul>
	      </div>
	    </div>
	</div>
    <div class="resume_right">
	    <div class="r_namerole">
	      <p><?php echo $row["first_name"]; ?></p>
	      <p><?php echo $row["last_name"]; ?></p>
	      <p class="role"><?php echo $row["job_position"]; ?></p>
	    </div>
	    <div class="r_info">
	      <ul>
	        <li>
	          <p><?php echo $row["email"]; ?></p>
	        </li>
	        <li>
	          <p><?php echo $row["phone_number"]; ?></p>
	        </li>
	      </ul>
	    </div>
        <div class="r_right_sub">
	      <div class="r_education">
	        <h2>Education</h2>
	        <ul>
	          <li>
	            <div class="r_ed_left">
	              <p><?php echo $row["graduation_date"]; ?></p>
	            </div>
	            <div class="r_ed_right">
	              <p><?php echo $row["course"]; ?></p>
	              <p><?php echo $row["institution"]; ?></p>
                  <p><?php echo $row["grad_description"]; ?></p>
	            </div>
	          </li>
	          <li>
	            <div class="r_ed_left">
	              <p>2013-2017</p>
	            </div>
	            <div class="r_ed_right">
	              <p>Web Designing College</p>
	              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa earum optio id iure reprehenderit</p>
	            </div>
	          </li>
	          <li>
	            <div class="r_ed_left">
	              <p>2017-2018</p>
	            </div>
	            <div class="r_ed_right">
	              <p>Video Designing College</p>
	              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa earum optio id iure reprehenderit</p>
	            </div>
	          </li>
	        </ul>
	      </div>
          <div class="r_jobs">
	        <h2>Work Experience</h2>
	        <ul>
	          <li>
	            <div class="r_ed_left">
	              <p><?php echo $row["start_date"]; ?></p>
                  <p><?php echo $row["end_date"]; ?></p>
	            </div>
	            <div class="r_ed_right">
                  <p><?php echo $row["job_title"]; ?></p>
	              <p>Google</p>
	              <p><?php echo $row["description"]; ?></p>
	            </div>
	          </li>
	          <li>
	            <div class="r_ed_left">
	              <p>2017-2019</p>
	            </div>
	            <div class="r_ed_right">
	              <p>Facebook</p>
	              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa earum optio id iure reprehenderit</p>
	            </div>
	          </li>
	          <li>
	            <div class="r_ed_left">
	              <p>2019-2022</p>
	            </div>
	            <div class="r_ed_right">
	              <p>Instagram</p>
	              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa earum optio id iure reprehenderit</p>
	            </div>
	          </li>
	        </ul>
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