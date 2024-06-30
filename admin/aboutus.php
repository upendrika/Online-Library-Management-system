<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Library Management System</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  <style type="text/css">
    * {
      padding: 0;
      margin: 0;
    }

    body {
      background-color: dimgray;
    }

    .about-1 {
      margin: 30px;
      padding: 5px;
    }

    .about-1 h1 {
      text-align: center;
      color: black;
      font-weight: bold;
    }

    .about-1 p {
      text-align: center;
      padding: 3px;
      color: #fff;
    }

    .about-item {
      margin-bottom: 20px;
      margin-top: 20px;
      background-color: white;
      padding: 80px 30px; /* Fix the comma in the padding value */
      box-shadow: 0 0 9px rgba(0, 0, 0, .6);
    }
    .about-item i {

    	font-size: 43px;
    	margin-bottom: 10px;
    }
    .about-item h3 {

    	font-size: 25px;
    	margin-bottom: 10px;
    }
    .about-item hr {
    	width: 46px;
    	height: 3px;
    	background-color: #5fbff9;
    	margin: 0 auto;
    	border:nome;
    }
    .about-item p {

    	margin-top: 20px;
    }
    .about-item:hover {
    	background-color: #5fbff9;
    }

    .about-item:hover i,
    .about-item:hover h3,
    .about-item:hover p{
    	color: #fff;
    }

    .about-item:hover hr{
    	background-color: #fff;

    }
    .about-item:hover i{
    	transform: translateY(-20px);

    }
    .about-item:hover i,
    .about-item:hover h3,
    .about-item:hover hr{
    	transition: all 400ms ease-in-out;
    }

    footer{
    	background: #212226;
    	padding: 20px;
    }
    footer p{
    	color: #fff;
    }


  </style>
</head>
<body>
  <section id="about">
    <div class="about-1">
      <h1>ABOUT US</h1><br>
      <h3 style="text-align: center;">Welcome to Evergreen University Library Management System!</h3>
      <p>
        Evergreen University is a leading institution of higher education committed to fostering intellectual growth, innovation, and personal development. Our vibrant campus community is fueled by a passion for learning and a dedication to excellence across various disciplines.The Evergreen University Library Management System is a cutting-edge platform that integrates state-of-the-art technology and user-friendly features. Our system streamlines library operations, making it easier for students and faculty to explore, discover, and utilize the vast array of resources available.
      </p>
    </div>
    <div id="about-2">
      <div class="content-box-lg">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="about-item text-center">
                <i class="fa fa-book"></i>
                <h3>MISSION</h3>
                <hr>
                <p>Our mission is to provide a seamless and enriching library experience for our university community. Through convenient access to a vast array of resources, personalized support, and innovative technology, we strive to foster academic excellence and support the research and scholarly pursuits of our students and faculty. We are committed to promoting information literacy, facilitating collaboration, and continuously enhancing our services to meet the evolving needs of our university community.
                </p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="about-item text-center">
                <i class="fa fa-globe"></i>
                <h3>VISION</h3>
                <hr>
                <p>Our vision at Evergreen University Library Management System is to be a catalyst for academic excellence and intellectual growth within the university community. We strive to create an innovative and dynamic library environment that empowers students and faculty to explore, discover, and harness the power of knowledge. Through cutting-edge technology and seamless access to resources, we aim to foster a culture of lifelong learning and support the scholarly pursuits of our university.
                </p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="about-item text-center">
                <i class="fa fa-pencil-alt"></i>
                <h3>ACHIEVEMENTS</h3>
                <hr>
                <p>Evergreen University's Online Library Management System has achieved significant milestones, including building a comprehensive digital collection, implementing advanced search and recommendation systems, fostering an engaged community, and continuously improving the platform. These achievements have transformed the library experience, providing convenient access to diverse resources, personalized discovery, collaborative learning, and a commitment to excellence in support of academic success and lifelong learning.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer class="text-center">
    <p>Copyright &copy; 2023 All rights reserved by T.I.U. De silva.</p>
  </footer>
</body>
</html>
