<head>
  <?php include './inc/depends.php';
        $conn = OpenCon();?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=`device-width`, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
  <link rel="stylesheet" href="./css/style.css">
  <!-- Dynamic Title - based off page name -->
  <title><?php echo ucwords(get_active_page()); ?></title>
</head>
