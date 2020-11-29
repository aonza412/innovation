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
            color: black;
            margin-bottom:-20px;
        }
 
        .contact{
            height: 250px;
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
                <a class="navbar-brand my-auto " href="home"><h1>INOVATION PARK</h1></a>
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

    <!-- service -->
    <section id="service" style="background:#FFFACD;" class="service">
		<div class="container">
            <center> 
                <br><p>จองห้อง</p>
            </center>
            <div class="row">
                <div class="card">
                    <div class="card-body">
                    
                    <!-- <label for="">เลือกห้อง</label>
                    <select class="form-control" id="sel1">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                     </select><br> -->
                    <h5> <label for="">เลือกห้องที่ต้องการใช้งาน</label> </h5>
                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                        <label for="vehicle1"> ห้องโถงกลาง จำนวน 30 ที่นั่ง</label><br>
                        <!-- <label for="">จำนวน</label>
                        <label for="">30</label>
                         <label for="">ที่นั่ง</label><br> -->

                         <input type="checkbox" id="vehicle2" name="vehicle2" value="Bike">
                        <label for="vehicle2">ห้องประชุม 1 จำนวน 10 ที่นั่ง</label><br>

                         <input type="checkbox" id="vehicle3" name="vehicle3" value="Bike">
                        <label for="vehicle3"> ห้องประชุม 2 จำนวน 10 ที่นั่ง</label><br>

                         <input type="checkbox" id="vehicle4" name="vehicle4" value="Bike">
                        <label for="vehicle4"> ห้องสตูดิโอ จำนวน - ที่นั่ง </label>
      
                    </div>
                </div>
                <div class="card">
                <center>
                    <div class="card-body">
                    <h5>  <label for=""> วันที่เริ่มจอง  </label></h5> 
                    <input type="datetime-local" id="datetimestart" name="datetimestart"><br><br>
                    <h5>  <label for=""> วันที่สิ้นสุดจอง  </label></h5> 
                    <input type="datetime-local" id="datetimeend" name="datetimeend"><br><br>
                    <input type="radio" id="event" name="gender" value="event">
                    <label for="event">จัดกิจกรรม</label>
                    <input type="radio" id="meet" name="gender" value="meet">
                    <label for="meet">ประชุม</label><br>
                    <button type="button" class="btn btn-success">ตกลง</button>
                </center>

                
                    </div>
                </div>
              
                
            </div>
		</div>
	</section>
    <!-- service -->
    
    <!-- contact -->
    <section id="contact" style="background:#3498DB;" class="contact">
		<!-- <div class="container">
            <center> 
                <br><p1>ติดต่อ</p1><br>
                <a href="">
                    <img style="width:100px;background:white;" src="img/icons/facebook.png"/>
                </a><br>
                <p2>E-MAIL : xxxxxxxx@kkumail.com</p2><br>
                <p2>PHONE : xxx-xxxxxxx</p2>
            </center>
		</div> -->
	</section>
    <!-- contact -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>