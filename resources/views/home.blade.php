<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://fonts.google.com/specimen/Anton">
    <title>Document</title>
    <style>
        .carousel-item{
            height: 600px;
        } 
        .carousel-item img{
            display: block;
            height: 100%;
            margin: auto;
        }
        .text{
            height: 300px;
        }
        .service{
            height: 500px;
        }
        .service p{
            font-size:50px;
            color:white;
            margin-bottom:-20px;
        }
        .event{
            height: 500px;
        }
        .event p{
            font-size:50px;
            color:white;
            margin-bottom:-20px;
        }
        .contact{
            height: 300px;
        }
        .contact p1{
            font-size:50px;
            color:white;
            margin-bottom:-20px;
        }
        .contact p2{
            font-size:30px;
            color:white;
            margin-bottom:-20px;
        }
        .coffee{
            height:200px;
            margin: auto;
            margin-top: 50px;
        }
        .what{
            height:300px;
            margin: auto;
        }
        .card{
            height:300px;
            width:400px;
            margin: auto;
            margin-top: 50px;
        }
        .card img{
            display: block;
            margin: auto;
        }
    </style>
</head>
<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="navbar-brand my-auto " href="index"><h1>INOVATION PARK</h1></a>
            </li>
        </ul>
        <ul class="nav navbar-nav flex-row justify-content-md-center justify-content-start flex-nowrap">
            <li class="nav-item">
                <a title="service" href="#service" class="nav-link" href="">บริการ</a> 
            </li>
            <li class="nav-item">
                <a title="event" href="#event" class="nav-link" href="">กิจกรรม</a> 
            </li>
            <li class="nav-item">
                <a title="contact" href="#contact" class="nav-link" href="">ติดต่อ</a> 
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">LOGIN</a> 
            </li>
        </ul>
    </nav>
    <!-- navbar -->
    <!-- poster -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/icons/camera.png">
            </div>
            <div class="carousel-item">
                <img src="img/icons/camera.png">
            </div>
            <div class="carousel-item">
                <img src="img/icons/camera.png">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- poster -->
    <!-- Text -->
    <section id="text" style="background:#239B56;" class="text">
		<div class="container">
            <div class="row">
                <img class="what" src="img/icons/what.png" alt="" />
                <img class="coffee" src="img/icons/coffee-cup.png" alt="" />
            </div>
		</div>
	</section>
    <!-- Text -->
    <!-- service -->
    <section id="service" style="background:#F39C12;" class="service">
		<div class="container">
            <center> 
                <br><p>บริการ</p>
            </center>
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <img src="img/icons/camera.png" alt="" />
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <img src="img/icons/camera.png" alt="" />
                    </div>
                </div>
            </div>
		</div>
	</section>
    <!-- service -->
    <!-- event -->
    <section id="event" style="background:#F1C40F;" class="event">
		<div class="container">
            <center> 
                <br><p>กิจกรรม</p>
            </center>
            <div class="row-6">
                <center>
                    <a href="">
                        <img src="img/icons/camera.png"/>
                    </a>
                    <a href="">
                        <img src="img/icons/camera.png"/>
                    </a>
                    <a href="">
                        <img src="img/icons/camera.png"/>
                    </a>
                    <a href="">
                        <img src="img/icons/camera.png"/>
                    </a>
                    <a href="">
                        <img src="img/icons/camera.png"/>
                    </a>
                    <a href="">
                        <img src="img/icons/camera.png"/>
                    </a>
                    <a href="">
                        <img src="img/icons/camera.png"/>
                    </a>
                    <a href="">
                        <img src="img/icons/camera.png"/>
                    </a>
                    <a href="">
                        <img src="img/icons/camera.png"/>
                    </a>
                    <a href="">
                        <img src="img/icons/camera.png"/>
                    </a>
                    <a href="">
                        <img src="img/icons/camera.png"/>
                    </a>
                    <a href="">
                        <img src="img/icons/camera.png"/>
                    </a>
                </center> 
            </div>
		</div>
	</section>
    <!-- event -->
    <!-- contact -->
    <section id="contact" style="background:#3498DB;" class="contact">
		<div class="container">
            <center> 
                <br><p1>ติดต่อ</p1><br>
                <a href="">
                    <img style="width:100px;background:white;" src="img/icons/facebook.png"/>
                </a><br>
                <p2>E-MAIL : xxxxxxxx@kkumail.com</p2><br>
                <p2>PHONE : xxx-xxxxxxx</p2>
            </center>
		</div>
	</section>
    <!-- contact -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>