<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My todo list</title>
   
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <div class="container mx-auto mt-10 p-5 bg-white rounded shadow-md">
        <h1 class="text-3xl text-center text-blue-600 font-bold">To-do App</h1>
    </div>


    <?php
// Connect with the database
$connection = mysqli_connect('localhost', 'sushant', 'password', 'practice');

// Check if the connection is successful
if (!$connection) {
    die('Connection failed: ' . mysqli_connect_error());
}

// Write query to get all todos
$getTodo = 'SELECT * FROM todo';

// Make query & get result
$result = mysqli_query($connection, $getTodo);

// Fetch the resulting rows as an array with MYSQLI_ASSOC
$todo = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Free the result set
mysqli_free_result($result);

// Close the connection when done
// mysqli_close($connection);
?>
<div class="flex items-center justify-center">
    <form action="" method="POST" class="w-full max-w-lg p-6 bg-white ">
        <div class="mb-4">
            <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Title</label>
            <input type="text" id="title" name="title" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-blue-500" required>
        </div>
        
        <div class="mb-4">
            <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description</label>
            <textarea id="description" name="description" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-blue-500" required></textarea>
        </div>

        <div class="mb-4">
            <label for="number" class="block text-gray-700 text-sm font-bold mb-2">Number</label>
            <input type="number" id="number" name="number" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-blue-500" required>
        </div>

        <button type="submit" name="button"  class="w-full bg-blue-500 text-white font-bold py-2 px-4 rounded-lg hover:bg-blue-600 focus:outline-none">
            Add Todo
        </button>
    </form>
</div>

<?php
   if (isset($_POST['button'])) {

    $title = $_POST['title'];
    $description = $_POST['description']; 
    $number = $_POST['number'];
    // echo "Title: " . htmlspecialchars($title) . "<br>";
    // echo "Description: " . htmlspecialchars($description) . "<br>";
    // echo "Number: " . htmlspecialchars($number);

    $postToDo="INSERT into todo(title,description,priority) VALUES ('$title','$description','$number')";

    // save to db
   if( mysqli_query($connection,$postToDo)){
   

    echo "sucess";
    mysqli_close($connection);
    header("Location: " . $_SERVER['PHP_SELF']); //for refracing page to relocate we can do location:rockpaper.php
    exit(); // Ensure no further code is executed after redirect
   }

}

?>
    
</div>

<?php
// Iterate over the $todo array and display each todo item
foreach ($todo as $todoff):
?>
    <div class="flex items-center justify-center bg-red-200 pl-[400px] pr-[400px]">
        <div class="flex flex-col items-center justify-center m-5 p-5 rounded-md bg-green-50 w-full ">
        <h1  class="text-xl font-bold">
            <?php echo htmlspecialchars($todoff['title']); ?>
        </h1>
        <span>
            <?php echo htmlspecialchars($todoff['description']);?>
        </span>
        <a href="detail.php?id=<?php echo $todoff['id']; ?>">View Details</a>
        </div>
       
    </div>
<?php endforeach; ?>

</body>
</html>


