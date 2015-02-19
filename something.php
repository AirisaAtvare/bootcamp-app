<!DOCTYPE html>
<html>
   <head>
     <link rel="stylesheet" type="text/css" href="test.css" />
     <title>Bootcamp</title>
   </head>
   <body>
     <h1><?php echo "some random text"?></h1>

     <image src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcRifD_A5qz__k8tEhjq9ya1F4QdJD1ikZfBlZYxkq6yCFOtvHH2R_PtI5E" alt="hamster picture"/><BR>
     <a href="index2.php">index2</a><br>

     <form action="saveComent.php" method="post">
     <label for="Name">Name: </label>
     <input type="text" id="name" name="user" value="<?=$_COOKIE['NameCookie']?>"><br>



     <label for="Comment">Comment: </label>
     <textarea name="comment" rows="10" cols="30">Comment</textarea>
     <input type="submit" value="button"><br>
    <script type="text/javascript" src="index.js"></script>


    <?php
    $mysqli = new mysqli("localhost", "homestead", "secret", "bootcamp");
    $result=$mysqli->query("SELECT * FROM Comments");
      while ($row = $result->fetch_assoc()){
        echo $row['author'];
        echo '<br>';

        echo $row['comment'];
        echo '<hr>';
      }




    ?>
   </body>
</html>
