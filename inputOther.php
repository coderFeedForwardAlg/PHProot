<!DOCTYPE html>

<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">

    </script>
    <link rel="stylesheet" href="styl.css">
<body>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">max's website</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="reports.php">reports</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="pics.php"> about the creater  </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ER.php"> ER diagram  </a>
                    </li>
                    
                    
                    <li class="nav-item">
                        <a class="nav-link" href="signIn.php"> log out   </a>
                    </li>

                </ul>

            </div>
        </div>
    </nav>







<h4>It's a new day</h4>
<form action="includes/newDay.php" method="POST">
    <input type= "text" name = "day" placeholder = "the day of the year"> 
    <br>
    <input type= "number" name = "time_sleeping" placeholder = "how much sleep did you get"> 
    <br>
    <input type= "number" name = "sleep_qual" placeholder = "how well did you sleep"> 
    <br>
    <button type = "submit" name = "submit"> enter new day record </button>

</form> 


<h4> add a new reward here</h4> 
<form action="includes/newRew.inc.php" method="POST">
    <input type= "text" name = "rewardIN" placeholder = "the reward"> 
    <br>
    <input type= "number" name = "rewardID_IN" placeholder = "the id"> 
    <br>
    <button type = "submit" name = "submit"> enter new reward </button>

</form> 






</body>


<script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.4.0/p5.js"></script>


</html>



