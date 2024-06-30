<?php 
session_start();

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Library Management System</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style type="text/css">
      

      nav
    {
        float: right;
        word-spacing: 30px;
        padding: 35px;
        padding-left: 60%;
    }  
    nav li 
    {
        line-height: 5px;

    }
.logo {
    position: fixed;
    top: 0;
    left: 0;
    margin: -6px;
    z-index: 9999;
}

.logo img {
    width: 150px;
    cursor: pointer;
}

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: sans-serif;
}

section{
    width: 100%;
    height: 100vh;
    /*background-image: url(images/bg.png);*/
    background-size: cover;
    background-position: center;
}
body {
    overflow-x: hidden; /* Prevent horizontal scrolling */
}
section nav{
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: space-around;
    box-shadow: 0 0 10px #089da1;
    background: black;
    position: fixed;
    left: 0;
    z-index: 100;
}

section nav .logo img{
    width: 150px;
    cursor: pointer;
    margin: 8px 0;

}

section nav ul{
    list-style: none;
}

section nav li{
    display: inline-block;
    padding: 0 10px;
}

section nav li a{
    text-decoration: none;
    color: white;
    font-size: 17px;

}

section nav li a:hover{
    color: #089da1;
}

section nav .social_icon i{
    margin: 0 5px;
    font-size: 18px;
}

section nav .social_icon i:hover{
    color: #089da1;
    cursor: pointer;
}

section .main{
    display: flex;
    align-items: center;
    justify-content: space-around;
    position: relative;
    top: 10%;
}

section .main h1{
    position: relative;
    font-size: 55px;
    top: 80px;
    left: 25px;
}

section .main h1 span{
    color: #089da1;
}

section .main p{
    width: 650px;
    text-align: justify;
    line-height: 22px;
    position: relative;
    top: 125px;
    left: 25px;
}

section .main .main_tag .main_btn{
    background: #089da1;
    padding: 10px 20px;
    position: relative;
    top: 200px;
    left: 25px;
    color: #fff;
    text-decoration: none;
}

section .main .main_img img{
    width: 780px;
    position: relative;
    top: 90px;
    left: 20px;
}




/*services*/

.services{
    width: 100%;
    height: auto;
    margin: 35px 0;
}

.services .services_box{
    width: 95%;
    margin: 0 auto;
    display: flex;
    align-items: center;
    justify-content: space-around;
}

.services .services_box .services_card{
    text-align: center;
    width: 310px;
    height: auto;
    box-shadow: 0 0 8px #089da1;
    padding: 15px 10px;
}

.services .services_box .services_card i{
    color: #089da1;
    font-size: 45px;
    margin-bottom: 15px;
    cursor: pointer;
}

.services .services_box .services_card h3{
    margin-bottom: 10px;
}


/*about*/

.about{
    width: 100%;
    height: auto;
    padding: 20px;
    display: flex;
    align-items: center;
    justify-content: space-around;
}

.about .about_image img{
    width: 800px;
}

.about .about_tag h1{
    font-size: 50px;
    position: relative;
    bottom: 35px;
}

.about .about_tag p{
    line-height: 22px;
    width: 650px;
    text-align: justify;
    margin-bottom: 15px;
    font-size: 17px;
}

.about .about_tag .about_btn{
    padding: 10px 20px;
    background: #089da1;
    color: #fff;
    text-decoration: none;
    position: relative;
    top: 50px;
}


/*Books*/

.featured_boks{
    width: 100%;
    height: 100vh;
    padding: 70px 0;
}

.featured_boks h1{
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 30px;
    font-size: 45px;
}

.featured_boks .featured_book_box{
    width: 90%;
    height: 60vh;
    margin: 0 auto;
    display: grid;
    grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr;
    overflow: hidden;
    overflow-x: scroll;
}

.featured_boks .featured_book_box .featured_book_card{
    width: 250px;
    height: 320px;
    text-align: center;
    padding: 5px;
    border: 1px solid #919191;
    margin: auto 20px;
}

.featured_boks .featured_book_box .featured_book_card:hover{
    box-shadow: 0 0 5px #089da1;
}

.featured_boks .featured_book_box .featured_book_card .featurde_book_img img{
    width: 150px;
}

.featured_boks .featured_book_box .featured_book_card .featurde_book_tag h2{
    margin: 12px;
}

.featured_boks .featured_book_box .featured_book_card .featurde_book_tag .writer{
    color: black;
    font-weight: bold;
}

.featured_boks .featured_book_box .featured_book_card .featurde_book_tag .categories{
    color: #089da1;
    margin-top: 8px;
}

.featured_boks .featured_book_box .featured_book_card .featurde_book_tag .book_price{
    margin-top: 8px;
    font-weight: bold;
    margin-bottom: 15px;
}

.featured_boks .featured_book_box .featured_book_card .featurde_book_tag .book_price sub{
    font-weight: 100;
    padding: 0 5px;
}

.featured_boks .featured_book_box .featured_book_card .featurde_book_tag .f_btn{
    padding: 8px 20px;
    border: 2px solid #089da1;
    text-decoration: none;
    color: #000;
}

::-webkit-scrollbar{
    width: 10px;
    height: 5px;
}

::-webkit-scrollbar-track{
    box-shadow: inset 0 0 8px rgba(0,0,0,0.2);
}

::-webkit-scrollbar-thumb{
    background: #089da1;
    border-radius: 10px;
}


/*arrivals*/

.arrivals{
    width: 100%;
    height: 100vh;
    margin-bottom: 35px;
}

.arrivals h1{
    font-size: 50px;
    text-align: center;
    margin-bottom: 35px;
}

.arrivals .arrivals_box{
    width: 95%;
    margin: 0 auto;
    display: grid;
    grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
    grid-gap: 25px 0;
}

.arrivals .arrivals_box .arrivals_card{
    width: 250px;
    height: 340px;
    text-align: center;
    padding: 5px;
    border: 1px solid #919191;
    margin: auto 20px;
}

.arrivals .arrivals_box .arrivals_card:hover{
    box-shadow: 0 0 5px #089da1;
}

.arrivals .arrivals_box .arrivals_card .arrivals_image{
    width: 150px;
    height: 220px;
    margin: 0 auto;
    /*cursor: pointer;*/
    box-shadow: 0 0 8px rgba(0,0,0,0.5);
    overflow: hidden;
}

.arrivals .arrivals_box .arrivals_card .arrivals_image img{
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
    transition: 0.3s;
}

.arrivals .arrivals_box .arrivals_card:hover .arrivals_image img{
    transform: scale(1.1);
}

.arrivals .arrivals_box .arrivals_card .arrivals_tag p{
    font-family: queen of camelot;
    font-size: 20px;
    margin: 8px 0;
}

.arrivals .arrivals_box .arrivals_card .arrivals_tag .arrivals_icon{
    color: #089da1;
    margin-bottom: 18px;
}

.arrivals .arrivals_box .arrivals_card .arrivals_tag .arrivals_btn{
    padding: 8px 20px;
    border: 2px solid #089da1;
    text-decoration: none;
    color: #000;
}

/*Banner*/

.banner{
    width: 100%;
    height: 50vh;
    background-image: url(images/ba1.jpg);
    background-size: cover;
    background-position: center;
}

.banner .banner_btn{
    padding: 8px 20px;
    background: #089da1;
    text-decoration: none;
    color: #fff;
    position: relative;
    top: 70%;
    left: 7%;
}


/*Footer*/

footer{
    width: 100%;
    background: #eaeaea;
}

footer .footer_main{
    width: 100%;
    display: flex;
    justify-content: space-around;
}

footer .footer_main .tag{
    margin: 10px 0;
}

footer .footer_main .tag img{
    width: 100px;
    margin-bottom: 10px;
}
.tag img{
     margin: -10px;

}
footer .footer_main .tag p{
    width: 250px;
    line-height: 22px;
    text-align: justify;
}

footer .footer_main .tag h1{
    font-size: 25px;
    margin: 25px 0;
    color: #000;
}

footer .footer_main .tag a{
    display: block;
    color: black;
    text-decoration: none;
    margin: 10px 0;
}

footer .footer_main .tag i{
    margin-right: 10px;
}

footer .footer_main .tag .social_link i{
    margin: 0 5px;
}

footer .footer_main .tag .search_bar{
    width: 230px;
    height: 30px;
    background: rgba(202,202,202);
    border-radius: 25px;
}

footer .footer_main .tag .search_bar input{
    width: 200px;
    padding: 2px 0;
    position: relative;
    top: 17%;
    left: 6%;
    border: none;
    outline: none;
    font-size: 13px;
    background: none;
}

footer .footer_main .tag .search_bar button{
    padding: 7px 15px;
    background: #089da1;
    border: none;
    margin-top: 15px;
    border-radius: 25px;
    color: #fff;
    cursor: pointer;
}

footer .end{
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 15px;
    color: #000;
}

footer .end span{
    color: #089da1;
    margin-left: 10px;
}
.box{
    height: 400px;
    width: 600px;
    background-color: #280302;
    margin: 70px auto;
    opacity: .8;
    color: white;
    margin-top: 100px;
}

#featured {
    margin-top: -130px; /* Adjust the value as needed */
  }

#arrival {
    margin-top: -50px; /* Adjust the value as needed */
  }
</style>
</head>
<body>
    
    <section id="section1">
        <nav>
            <div class="logo">
                <img src="images/lo1.png">
            </div>

            <?php 
            if(isset($_SESSION['login_user'])){
            ?>
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="books.php">BOOKS</a></li>
                    <li><a href="logout.php">LOGOUT</a></li>
                    <li><a href="feedback.php">FEEDBACK</a></li>
                </ul>
            <?php
            }
            else{
            ?>
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="books.php">BOOKS</a></li>
                    <li><a href="../login.php">LOGIN</a></li>
                    <li><a href="feedback.php">FEEDBACK</a></li>
                </ul>
            <?php 
            }
            ?>

            
        </nav>

        <div>

        <video autoplay loop muted plays-inline class="back-video" style="width: 100%;">
            <source src="images/video2.mp4" type="video/mp4">
            
        </video>
        </div>

        <div class="main">

            <div class="main_tag">
                <div class="box">
                <h1 style="text-align: center;">WELCOME  TO  <br><span>LIBRARY ZONE</span></h1><br>

                <h1 style="text-align: center;font-size: 25px;">Opens at: 09:00 am </h1><br>
                <h1 style="text-align: center;font-size: 25px;">Closes at: 06:00 pm </h1><br>
                
            </div>
            </div>

            

        </div>

    </section>




    <!--Services-->

    <div class="services">

        <div class="services_box">

            <div class="services_card">
                <i class="fa fa-hourglass-1"></i>
                <h3>Time and Cost Efficiency</h3>
                <p>
                    
				save time and effort for users 
                </p>
            </div>

            <div class="services_card">
                <i class="fa fa-line-chart"></i>
                <h3>Explore Limitless Resources</h3>
                <p>
                     
                    access to an extensive collection of digital resources.    
                </p>
            </div>

            <div class="services_card">
                <i class="fa fa-graduation-cap"></i>
                <h3> Academic Support </h3>
                <p>
                   
					Research guides, citation management tools
                </p>
            </div>

            <div class="services_card">
                <i class="fa-solid fa-lock"></i>
                <h3>Personalized User Experience</h3>
                <p>
                    
					Allow users to create personalized accounts 
                </p>
            </div>

        </div>

    </div>




    <!--About-->
    <section id="about">
    <div class="about">

        <div class="about_image">
            <img src="images/about.png">
        </div>
        <div class="about_tag">
            <h1>About Us</h1>
            <p>
                At Evergreen University, we are dedicated to providing our students and faculty with a seamless and efficient library experience. Our library management system is designed to support the academic pursuits of our university community and enhance access to a wealth of knowledge and resources.
            </p>
            <a href="aboutus.php" class="about_btn">Learn More</a>
        </div>

    </div>
    </section>




    <!--Books-->
    
    <section id="featured">
    <div class="featured_boks">

        <h1>Featured Books</h1>

        <div class="featured_book_box">

            <div class="featured_book_card">

                <div class="featurde_book_img">
                    <img src="images/1984.png">
                </div>

                <div class="featurde_book_tag">
                    <p class="writer">Harper Lee</p>
                    <div class="categories">Fiction</div>
                </div>               

            </div>

            <div class="featured_book_card">

                <div class="featurde_book_img">
                    <img src="images/Big Magic.png">
                </div>

                <div class="featurde_book_tag">
                    <p class="writer">Elizabeth Gilbert</p>
                    <div class="categories">Arts and creativity</div>
                </div>               

            </div>

            <div class="featured_book_card">

                <div class="featurde_book_img">
                    <img src="images/Gray's Anatomy.png">
                </div>

                <div class="featurde_book_tag">
                    <p class="writer">Henry Gray</p>
                    <div class="categories">Reference Book</div>
                </div>               

            </div>

            <div class="featured_book_card">

                <div class="featurde_book_img">
                    <img src="images/IEEE Transactions on Visualization.png">
                </div>
                <br>
                <div class="featurde_book_tag">
                    <p class="writer">Institute of IEEE</p>
                    <div class="categories">Academic Journals</div>
                    
                </div>               

            </div>

            <div class="featured_book_card">

                <div class="featurde_book_img">
                    <img src="images/The Adventures of Sherlock Holmes.png">
                </div>

                <div class="featurde_book_tag">
                    <p class="writer">Arthur Conan Doyle</p>
                    <div class="categories">Fiction</div>
                   
                </div>               

            </div>
            
            <div class="featured_book_card">

                <div class="featurde_book_img">
                    <img src="images/The Atlas of Human Anatomy.png">
                </div>
                <br><br>
                <div class="featurde_book_tag">
                    <p class="writer"> Frank H. Netter</p>
                    <div class="categories">Reference Book</div>
                    
                </div>               

            </div>

            <div class="featured_book_card">

                <div class="featurde_book_img">
                    <img src="images/The Creative Habit.png">
                </div>
                <br><br>
                <div class="featurde_book_tag">
                    <p class="writer">Twyla Tharp</p>
                    <div class="categories">Arts and creativity</div>
                   
                </div>               

            </div>

            <div class="featured_book_card">

                <div class="featurde_book_img">
                    <img src="images/the lancet.png">
                </div>
                <br><br>
                <div class="featurde_book_tag">
                    <p class="writer">Elsevier</p>
                    <div class="categories">Academic Journals</div>
                   
                </div>               

            </div>

            

            <div class="featured_book_card">

                <div class="featurde_book_img">
                    <img src="images/The Da Vinci Code.png">
                </div>

                <div class="featurde_book_tag">
                    <p class="writer">Dan Brown</p>
                    <div class="categories">Thriller</div>
                    
                </div>               

            </div>

            <div class="featured_book_card">

                <div class="featurde_book_img">
                    <img src="images/Outlander.png">
                </div>

                <div class="featurde_book_tag">
                    <p class="writer">Diana Gabaldon</p>
                    <div class="categories">Romance</div>
                    
                </div>               

            </div>

            <div class="featured_book_card">

                <div class="featurde_book_img">
                    <img src="images/The Silence of the Lambs.png">
                </div>

                <div class="featurde_book_tag">
                   
                    <p class="writer">Thomas Harris</p>
                    <div class="categories">Thriller</div>
                    
                </div>               

            </div>

            <div class="featured_book_card">

                <div class="featurde_book_img">
                    <img src="images/Pride and Prejudice.png">
                </div>

                <div class="featurde_book_tag">
                   
                    <p class="writer">Jane Austen</p>
                    <div class="categories">Romance</div>
                    
                </div>               

            </div>

            <div class="featured_book_card">

                <div class="featurde_book_img">
                    <img src="images/The Girl with the Dragon Tattoo.png">
                </div>

                <div class="featurde_book_tag">
                    
                    <p class="writer">Stieg Larsson</p>
                    <div class="categories">Thriller</div>
                    
                </div>               

            </div>

            <div class="featured_book_card">

                <div class="featurde_book_img">
                    <img src="images/Neuromancera.png">
                </div>

                <div class="featurde_book_tag">
                    
                    <p class="writer">William Gibson</p>
                    <div class="categories">Science Fiction</div>
                    
                </div>               

            </div>

        </div>

    </div>
</section>



    
    <!--Arrivals-->
<section id="arrival">
    <div class="arrivals">
        <h1>New Arrivals</h1>

        <div class="arrivals_box">

            <div class="arrivals_card">
                <div class="arrivals_image">
                    <img src="images/arrival_1.jpg">
                </div>
                <div class="arrivals_tag">
                    <p>The Giver</p>
                    <div class="arrivals_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                </div>
            </div>

            <div class="arrivals_card">
                <div class="arrivals_image">
                    <img src="images/arrival_2.jpg">
                </div>
                <div class="arrivals_tag">
                    <p>The Wright Brothers</p>
                    <div class="arrivals_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                </div>
            </div>

            <div class="arrivals_card">
                <div class="arrivals_image">
                    <img src="images/arrival_3.jpg">
                </div>
                <div class="arrivals_tag">
                    <p>Radical Gardening</p>
                    <div class="arrivals_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                </div>
            </div>

            <div class="arrivals_card">
                <div class="arrivals_image">
                    <img src="images/arrival_4.jpg">
                </div>
                <div class="arrivals_tag">
                    <p>Red Queen</p>
                    <div class="arrivals_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                </div>
            </div>

            <div class="arrivals_card">
                <div class="arrivals_image">
                    <img src="images/arrival_5.jpg">
                </div>
                <div class="arrivals_tag">
                    <p>To kill a mokingBird</p>
                    <div class="arrivals_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                </div>
            </div>

            <div class="arrivals_card">
                <div class="arrivals_image">
                    <img src="images/arrival_6.jpg">
                </div>
                <div class="arrivals_tag">
                    <p>Harry Potter and the philossoper's stone</p>
                    <div class="arrivals_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                </div>
            </div>

            <div class="arrivals_card">
                <div class="arrivals_image">
                    <img src="images/arrival_7.jpg">
                </div>
                <div class="arrivals_tag">
                    <p>Heros of Olympus</p>
                    <div class="arrivals_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                </div>
            </div>

            <div class="arrivals_card">
                <div class="arrivals_image">
                    <img src="images/arrival_8.webp">
                </div>
                <div class="arrivals_tag">
                    <p>Diary of wimpy Kid - Squid game</p>
                    <div class="arrivals_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                </div>
            </div>

            <div class="arrivals_card">
                <div class="arrivals_image">
                    <img src="images/arrival_9.jpg">
                </div>
                <div class="arrivals_tag">
                    <p>Ranger's Apperntice</p>
                    <div class="arrivals_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                </div>
            </div>

            <div class="arrivals_card">
                <div class="arrivals_image">
                    <img src="images/arrival_10.jpg">
                </div>
                <div class="arrivals_tag">
                    <p>Percy Jackson and the lighting thief</p>
                    <div class="arrivals_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section><br><br><br><br><br><br>


        <div class="about_image">
            <img src="images/ba1.jpg">
        </div>
        

    <!--Footer-->

    <footer>
        <div class="footer_main">

            <div class="tag">
                <img src="images/lo1.png">
                <p>
                    Join Library Zone today and embark on a journey of intellectual exploration. Unleash the power of knowledge, connect with a vibrant community, and discover new horizons with our cutting-edge online library system.
                </p>

            </div>

            <div class="tag">
                <h1>Quick Link</h1>
                <a href="#section1">Home</a>
                <a href="#about">About</a>
                <a href="#featured">Featured</a>
                <a href="#arrival">Arrivals</a>
                
                
                
            </div>

            <div class="tag">
                <h1>Contact Info</h1>
                <a href="#"><i class="fa-solid fa-phone"></i>+94 12 345 6789</a>
                <a href="#"><i class="fa-solid fa-phone"></i>+94 32 444 6991</a>
                <a href="#"><i class="fa-solid fa-envelope"></i>evergreenuniversity.libraryzone@gmail.com</a>
                
            </div>

            <div class="tag">
                <h1>Follow Us</h1>
                <div class="social_link">
                    <i class="fa-brands fa-facebook-f"></i>
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-linkedin-in"></i>
                </div>
                
            </div>

                       
            
        </div>

        <!--<p class="end">Design By<span><i class="fa-solid fa-face-grin"></i> T.I.De silva</span></p>-->
        <p style="text-align:center; background-color: black; padding: 20px; color: white;">Copyright &copy; 2023 All rights reserved by T.I.U. De silva.</p>

    </footer>





    
</body>
</html>