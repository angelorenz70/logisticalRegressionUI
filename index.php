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
    <link href="css/main.css" rel="stylesheet" media="all">
</head>
<body>
<div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">PATIENTS HEART DISEASE PREDICTION</h2>
                    <!--FORM-->
                    <form method="POST" action="prediction.php">
                        <div class="input-group">
                            <label for="">Gender:</label>
                            <select class="input--style-1 form-control" name="gender">
                                <option value="0">Male</option>
                                <option value="1">Female</option>
                            </select>
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="number" step="1" min="1" max="100" placeholder="AGE" name="age">
                        </div>
                        <!-- <div class="input-group">
                            <label for=""><span>0 - MALE and 1 - FEMALE</span></label>
                            <input class="input--style-1" type="number" step="1" min="0" max="1" placeholder="GENDER" name="gender">
                        </div> -->
                        <div class="input-group">
                            <input class="input--style-1" type="number" step="1" min="0" max="3" placeholder="CHEST PAIN TYPE" name="chest_pain_type">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="number" step="1" min="1" placeholder="RESTING BLOOD PRESSURE" name="resting_blood_pressure">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="number" step="1" min="1" placeholder="SERUM CHOLESTEROL" name="serum_cholesterol">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="number" step="1" min="0" max="1" placeholder="FASTING BLOOD SUGAR" name="fasting_blood_sugar">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="number" step="1" min="0" max="1" placeholder="RESTING ELECTROCARDIOGRAPHIC RESULTS" name="resting_electrocardiographic_results">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="number" step="1" min="1" placeholder="MAXIMUM HEART RATE ACHIEVED" name="maximum_heart_rate_achieved">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="number" step="1" min="0" max="1" placeholder="EXERCISE INDUCED ANGINA" name="exercise_induced_angina">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="number" step="0.01" min="0" placeholder="ST depression induced by exercise relative to rest" name="st_depression">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="number" step="1" min="0" max="2" placeholder="the slope of the peak exercise ST segmen" name="slope_st">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="number" step="1" min="0" max="3" placeholder="NUMBER OF MAJOR VESSELS" name="number_of_major_vessels">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="number" step="1" min="0" max="3" placeholder="THALASSEMIA" name="thalassemia">
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