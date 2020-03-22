<html lang="en">
    <!--   NOM: HANANE EL FERDAOUSSI    -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TP3</title>
   
</head>
<body>
       <center> <h1 class="p-3 bg-success text-white">Délices des fruits et legumes</h1></center>
    <?php
       $my_array = array("images/img1.jpg","images/img2.jpg","images/img3.jpg","images/img4.jpg","images/img5.jpg","images/img6.jpg");

shuffle($my_array);
echo '<center>';
    for($i=0;$i<3;$i++)
    {
        echo '<img src="'.$my_array[$i].'" style="margin-right:50px;">';
    }
    echo'</center>';
    ?>

</body>
</html>