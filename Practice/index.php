<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My todo list</title>
   
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<div>

<?php 
include ('database/dbconnect.php');
?>

<div class="flex flex-col items-center bg-blue-50 h-full pb-[150px]">
<h1>To-Do App</h1>
<div>

<!-- form for todo is here -->
    <div class="flex flex-row  ">
        <form action="" method="POST">
            <input type="text" placeholder="Title" id="title" name="title"  class="rounded-md bg-white m-5 p-2"/>
            <input type="text" placeholder="description" id="description" name="description" class="rounded-md p-2 bg-white m-5" />
            <input type="number" placeholder="priority" id="priority" name="priority" class="rounded-md bg-white p-2 m-5" />
            <button type="submit" type="submit" name="button"  class="bg-white rounded-md m-5 flex items-center p-2"> Add todo</button>
        </form>

    </div>

    <?php 
    
    if(isset($_POST['button'])){
        $title =$_POST['title'];
        $description=$_POST['description'];
        $priority = $_POST['priority']; 

        $postToDo="INSERT into todo(title,description,priority) VALUES('$title','$description','$priority')";

        if(mysqli_query($dbconnect,$postToDo)){
            echo "sucess";
            header("Location:".$_SERVER['PHP_SELF']);// this is to refress page if needed to navigate we can do  header("Location: index.php"); 
            exit();
        }
        echo $number;
    }
    
    ?>

    <!-- looping the todo lsit -->

    <div class="">

    <?php 
    // SQL QUERY TO GET ALL FORM TO DO
    $getToDo='select * from todo';
    // MAKE QUERY AND GET RESULT

    $result =mysqli_query($dbconnect,$getToDo);

    // FETCHING THE RESULT ROWS AS AN ARRAY WITH MUSQLI _ASSOC

    $todo=mysqli_fetch_all($result,MYSQLI_ASSOC);
    

    mysqli_free_result($result); //freeing $result
    ?>




    <?php
// Iterate over the $todo array and display each todo item
foreach ($todo as $todoff):
?>
    <div class="flex items-center justify-center pl-[400px] pr-[400px] border border-gray-300">
       <div class="flex ">
       <div class="flex flex-col items-center justify-center m-5 p-5 rounded-md    bg-white w-[500px] shadow-md hover:shadow-lg transition-shadow">
        <h1 class="text-2xl font-bold mb-3 text-gray-800">
            <?php echo htmlspecialchars($todoff['title']); ?>
        </h1>
        <span class="text-gray-600 mb-4">
            <?php echo htmlspecialchars($todoff['description']);?>
        </span>

        <a class="mt-4 inline-flex items-center justify-center px-6 py-3 rounded-md bg-green-500 hover:bg-green-600 text-white font-medium transition-colors" href="detail.php?id=<?php echo $todoff['id']; ?>">View Details</a>
       
        </div>
       </div>
       
    </div>
<?php endforeach; ?>







    </div>
</div>
</div>
</div>



</html>