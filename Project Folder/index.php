<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="./css/homepage.css">
    <link rel="stylesheet" href="./css/font-awesome-4.7.0/css/font-awesome.css">
    <title> Index </title>

</head>
<body style="background: grey; color: black">
    
    <div class="container">
        <div class="title">
            <span class="heading"> Transcript Access Portal </span>
        </div>
        
        <div class="nav">
            <ul>
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    <a href="login.php">Administrator Login</a>
                </li>
              
                <li class="dropdown" onclick="toggleDisplay('2')">
                    <a href="#" class="dropbtn">Student &nbsp
                        <span class="fa fa-angle-down"></span>
                    </a>
                    <div class="dropdown-content" id="2">
                        <a href="./login.php">Results</a>
                        <a href ="contact.php"> Contact </a>
                    </div>
                </li>
            </ul>
        </div>
    
        <div class="slider">
            <img src="images/main1.jpg" class="slider-image" alt="img" width="150%">
        </div>
        <br>
        <div class="main">
            <h4 align="center"> Welcome to the Online Transcript Portal! </h4>
            <p> Western Michigan University (WMU) is a public research university in Kalamazoo, Michigan. It was established in 1903 by Dwight B. Waldo. Its enrollment, as of the Fall 2016 semester, was 23,252. The university's athletic teams compete in Division I of the National Collegiate Athletic Association (NCAA) and are known as the Western Michigan Broncos. They compete in the Mid-American Conference for most sports. </p>
    
            <div class="info">
                <div>
                    <h3 style="color: lightgreen;"> University Homepage</h3> <hr>
                    <p align="center"> <a href="https://www.wmich.edu" style="text-align: center"> WMU Homepage</a> 


                </div>
                <div>
                      <h3 style="color: lightgreen;"> Admissions </h3> <hr>
                    <p> Stumble on this webpage by mistake?  
                            Are you a new student or a considering a transfer to WMU?? You can access WMU Application using this link : <a href="admission.php"> Admissions </a></p>
                </div>
                <div>
                      <h3 style="color: lightgreen;">Library</h3> <hr>
                    <p> WMU library resources are known worldwide and have great variety of selection of resources available. We have books, articles, dvd's, computer labs, virtual reality, etc.</p>
                </div>
                <div>
                      <h3 style="color: lightgreen;">Locations</h3> <hr>
                    <p>With 5 differnt locations, you can click <a href= "location.php" > here</a> for more information</p>
                </div>
            </div>
        </div>

<hr>
    

</body>
</html>