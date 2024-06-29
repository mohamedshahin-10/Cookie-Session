<?php
setcookie("name", "Mohamed Shahin", time()+60);
setcookie("track", "CMS", time()+10);
setcookie("Course", "PHP", time()+30);

echo '<pre>';
var_dump($_COOKIE);
echo '</pre>';
?>

<html>
<head>
    <title>Setting Cookies with CMS</title>
</head>
<body>
    <h1>Welcome</h1>
    <?php echo "Set Cookies"; 

    setcookie("track", "ًWordPress", time()+200);
    setcookie("Course", "HTML", time()+300);
    setcookie("organization", "iti", time() + 60);

    

    setcookie("name", "Mohamed Shahin", time()-1); 
    setcookie("track", "CMS", time()-1);    
    setcookie("Course", "PHP", time()-1);

    ?>
</body>
</html>