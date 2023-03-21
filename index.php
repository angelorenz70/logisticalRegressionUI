<!DOCTYPE html>
<html lang="en">
<head>
     <!-- Title Page-->
     <title>Machine Learning</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main1.css" rel="stylesheet" media="all">

    <!--ajax-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>
<body>
    <div class="page-wrapper bg-blue p-t-20 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h1 class="title" style="align:center; width: 500px">HEART DISEASE</h1>
                    <!--FORM-->
                    <form method="POST" action="prediction.php">
                        <div class="input-group">
                            <input class="input--style-1" type="number" step="1" min="0" placeholder="Age" name="Age">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="number" step="1" min="0" max="2" placeholder="Diabetes" name="Diabetes_012">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="number" step="1" min="0" max="1" placeholder="High Blood Pressure" name="HighBP">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="number" step="1" min="0" max="1" placeholder="High Cholesterol" name="HighChol">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="number" step="1" min="0" max="1" placeholder="Cholesterol Check" name="CholCheck">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="number" step="0.1" min="1" placeholder="Body Mass Index" name="BMI">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="number" step="1" min="0" max="3" placeholder="Smoker" name="Smoker">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="number" step="1" min="0" max="3" placeholder="Stroke" name="Stroke">
                        </div>
                        
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>
        
</body>
</html>