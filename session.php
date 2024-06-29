<?php
session_start();
echo '<pre>';
var_dump($_SESSION);
echo '</pre>';

if (isset($_SESSION['page_count'])) {
    $_SESSION['page_count'] += 1;
} else {
    $_SESSION['page_count'] = 1;
}

$msg = "You have visited my page <span style='color:red'>" . $_SESSION['page_count'] ;
$msg .= "</span> times in this session.";

if ($_SESSION['page_count'] > 10) {
    echo "Thank you for visiting our website <span style='color:green'>10 </span>times";
}

$_SESSION['grade'] = 50;
echo '<br>';
echo 'test';
echo '<pre>';
var_dump($_SESSION);
echo '</pre>'; 

unset($_SESSION['page_count']);
session_destroy();
echo '<pre>';
var_dump($_SESSION);
echo '</pre>'; 

?>

<html>
<head>
    <title>Setting up a CMS session</title>
</head>
<body>
        <?php echo ($msg) ;?>  
</body>