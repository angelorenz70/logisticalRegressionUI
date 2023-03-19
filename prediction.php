<?php
// Get the inputs from the form
$gender= $_POST['gender'];
$age = $_POST['age'];
$chest_pain_type = $_POST['chest_pain_type'];
$resting_blood_pressure = $_POST['resting_blood_pressure'];
$serum_cholesterol = $_POST['serum_cholesterol'];
$fasting_blood_sugar = $_POST['fasting_blood_sugar'];
$resting_electrocardiographic_results = $_POST['resting_electrocardiographic_results'];
$maximum_heart_rate_achieved = $_POST['maximum_heart_rate_achieved'];
$exercise_induced_angina = $_POST['exercise_induced_angina'];
$st_depression = $_POST['st_depression'];
$slope_st = $_POST['slope_st'];
$number_of_major_vessels = $_POST['number_of_major_vessels'];
$thalassemia = $_POST['thalassemia'];


// Send a POST request to the Flask server
$url = 'http://localhost:5000/predict';
$data = array('gender' => $gender,
            'age' => $age,
            'chest_pain_type' => $chest_pain_type,
            'resting_blood_pressure' => $resting_blood_pressure,
            'serum_cholesterol' => $serum_cholesterol,
            'fasting_blood_sugar' => $fasting_blood_sugar,
            'resting_electrocardiographic_results' => $resting_electrocardiographic_results,
            'maximum_heart_rate_achieved' => $maximum_heart_rate_achieved,
            'exercise_induced_angina' => $exercise_induced_angina,
            'st_depression' => $st_depression,
            'slope_st' => $slope_st,
            'number_of_major_vessels' => $number_of_major_vessels,
            'thalassemia' => $thalassemia,
            );

$options = array(
    'http' => array(
        'header'  => "Content-type: application/json\r\n",
        'method'  => 'POST',
        'content' => json_encode($data),
    ),
);

$context  = stream_context_create($options);
$response = file_get_contents($url, false, $context);
$result = json_decode($response);
$alert_warning = null;
$str_prediction = null;

if($result->prediction != null){
    $alert_warning = "Sorry, We can't process for now. Try again later.";
}

if($result->prediction == 1){
    $str_prediction = "The person has a presence of Heart Disease";
}else{
    $str_prediction = "The person is Healthy";
}

?>

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
                    <h2 class="title">Heart Disease</h2>
                    <h1><?php echo "Prediction: " . $result->prediction ?></h1><br>
                    <h1><?php echo  $str_prediction ?></h1><br>
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
