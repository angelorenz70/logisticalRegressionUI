<?php
// Get the inputs from the form
						

$Age = $_POST['Age'];
$Diabetes_012= $_POST['Diabetes_012'];
$HighBP = $_POST['HighBP'];
$HighChol = $_POST['HighChol'];
$CholCheck = $_POST['CholCheck'];
$BMI = $_POST['BMI'];
$Smoker = $_POST['Smoker'];
$Stroke = $_POST['Stroke'];


// Send a POST request to the Flask server
$url = 'http://localhost:5000/predict';
$data = array(		
            'Age' => $Age,	
            'Diabetes_012' => $Diabetes_012,
            'HighBP' => $HighBP,
            'HighChol' => $HighChol,
            'CholCheck' => $CholCheck,
            'BMI' => $BMI,
            'Smoker' => $Smoker,
            'Stroke' => $Stroke,
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
    $str_prediction = "The person has a chance of Heart Disease";
}else{
    $str_prediction = "The person is healthy";
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
    <link href="css/main1.css" rel="stylesheet" media="all">
</head>
<body>
<div class="page-wrapper bg-blue p-t-20 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                        <h1 class="title" style="text-align:center; width: 500px">Coronary Heart Disease</h1>
                        <h1><?php echo "Prediction: " . $result->prediction ?></h1><br>
                        <h1><?php echo "Probability: " . $result->probability . "%" ?></h1><br>
                        <h1><?php echo  $str_prediction ?></h1><br>
                    <form action="index.php">
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit">Back</button>
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
