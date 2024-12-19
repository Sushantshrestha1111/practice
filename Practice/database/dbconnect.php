 <?php 

 $dbconnect=mysqli_connect('localhost', 'sushant', 'password', 'practice');

 if(!$dbconnect){
    echo'Db connection failed';
 }
 
 ?>