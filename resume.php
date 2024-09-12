<?php
// resume.php

// Define the resume data as an array
$resume = array(
  'name' => 'Shinkhal Sinha',
  'contact' => array(
    'email' => 'johndoe@example.com',
    'phone' => '696966996969',
    'linkedin' => 'https://www.linkedin.com/in/shinkhal-sinha/'
  ),
  'summary' => 'Highly motivated and experienced software developer with 5+ years of experience in building scalable and efficient applications.',
  'education' => array(
    array(
      'degree' => 'Bachelor of Science in Computer Science',
      'university' => 'Laudi Professional University',
      'graduation_date' => '2026'
    )
  ),
  'work_experience' => array(
    array(
      'company' => 'Example Company',
      'job_title' => 'Software Developer',
      'employment_date' => '2015-2018',
      'achievements' => array(
        'Developed multiple high-traffic e-commerce websites using PHP and MySQL',
        'Improved code quality and reduced bugs by 30% through rigorous testing and code review'
      )
    ),
    array(
      'company' => 'Another Company',
      'job_title' => 'Senior Software Developer',
      'employment_date' => '2018-Present',
      'achievements' => array(
        'Led a team of 5 developers to build a scalable and efficient API using Node.js and MongoDB',
        'Improved team velocity by 25% through process improvements and automation'
      )
    )
  ),
  'skills' => array(
    'Programming languages' => array('PHP', 'JavaScript', 'Node.js'),
    'Databases' => array('MySQL', 'MongoDB'),
    'Frameworks' => array('Laravel', 'Express.js')
  )
);

// Display the resume
?>

<!DOCTYPE html>
<html>
<head>
  <title>John Doe's Resume</title>
  <style>
    body {
      font-family: Arial, sans-serif;
    }
    h1, h2, h3 {
      color: #333;
    }
    ul {
      list-style: none;
      padding: 0;
      margin: 0;
    }
    li {
      margin-bottom: 10px;
    }
  </style>
</head>
<body>
  <h1><?php echo $resume['name']; ?></h1>
  <h2>Contact Information</h2>
  <ul>
    <li>Email: <a href="mailto:<?php echo $resume['contact']['email']; ?>"><?php echo $resume['contact']['email']; ?></a></li>
    <li>Phone: <?php echo $resume['contact']['phone']; ?></li>
    <li>LinkedIn: <a href="<?php echo $resume['contact']['linkedin']; ?>">View Profile</a></li>
  </ul>
  <h2>Summary</h2>
  <p><?php echo $resume['summary']; ?></p>
  <h2>Education</h2>
  <ul>
    <?php foreach ($resume['education'] as $education) { ?>
      <li>
        <h3><?php echo $education['degree']; ?></h3>
        <p><?php echo $education['university']; ?>, <?php echo $education['graduation_date']; ?></p>
      </li>
    <?php } ?>
  </ul>
  <h2>Work Experience</h2>
  <ul>
    <?php foreach ($resume['work_experience'] as $experience) { ?>
      <li>
        <h3><?php echo $experience['job_title']; ?> at <?php echo $experience['company']; ?></h3>
        <p><?php echo $experience['employment_date']; ?></p>
        <ul>
          <?php foreach ($experience['achievements'] as $achievement) { ?>
            <li><?php echo $achievement; ?></li>
          <?php } ?>
        </ul>
      </li>
    <?php } ?>
  </ul>
  <h2>Skills</h2>
  <ul>
    <?php foreach ($resume['skills'] as $category => $skills) { ?>
      <li>
        <h3><?php echo $category; ?></h3>
        <ul>
          <?php foreach ($skills as $skill) { ?>
            <li><?php echo $skill; ?></li>
          <?php } ?>
        </ul>
      </li>
    <?php } ?>
  </ul>
</body>
</html>