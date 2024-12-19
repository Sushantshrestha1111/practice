<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Todo</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

<?php 
    include('database/dbconnect.php'); // Include database connection

    if (isset($_GET['id'])) {
        $todo_id = $_GET['id'];  // Get the todo ID from the URL parameter

        // Query to get the todo item from the database by its ID
        $getsingle = "SELECT * FROM todo WHERE id = $todo_id";
        
        // Execute the query
        $result = mysqli_query($dbconnect, $getsingle);

        // Check if the query was successful
        if ($result) {
            // Fetch the todo item as an associative array
            $todo = mysqli_fetch_assoc($result);
        } else {
            // If query fails, show an error message
            echo "Error: " . mysqli_error($dbconnect);
        }

        // Free the result to prevent memory leaks
        mysqli_free_result($result);
    }

    
?>

<?php 

if(isset($_POST['update'])){
    $title=$_POST['title'];
    $description=$_POST['description'];
    $priority = $_POST['priority']; 


    $updateToDo="UPDATE todo SET title='$title', description='$description', priority=' $priority' WHERE id = $todo_id";

    if(mysqli_query($dbconnect,$updateToDo)){
        echo"updated Sucessfully";
    }else{
        echo"update failed";
    }




}

if(isset($_POST['delete'])){
    $delete="DELETE FROM todo WHERE id = $todo_id";

    if(mysqli_query($dbconnect,$delete)){
        echo "Deleted Sucessfully";
        header("Location: index.php");
    }else{
        echo"Not deleted";
    }

}


?>

<div class="flex justify-center items-center min-h-screen bg-blue-50 p-4">
    <?php if (isset($todo)): ?>
        <form action="" method="POST" class="bg-white p-6 rounded-lg shadow-md w-full max-w-md">
            <h1 class="text-2xl font-bold mb-4">Edit Todo</h1>
            
            <!-- Title input -->
            <label for="title" class="block text-gray-700">Title</label>
            <input type="text" name="title" id="title" class="w-full p-2 mb-4 border border-gray-300 rounded-md" value="<?php echo htmlspecialchars($todo['title']); ?>" required>

            <!-- Description input -->
            <label for="description" class="block text-gray-700">Description</label>
            <textarea name="description" id="description" class="w-full p-2 mb-4 border border-gray-300 rounded-md" rows="4" required><?php echo htmlspecialchars($todo['description']); ?></textarea>

            <!-- Priority input -->
            <label for="priority" class="block text-gray-700">Priority</label>
            <input type="number" name="priority" id="priority" class="w-full p-2 mb-4 border border-gray-300 rounded-md" value="<?php echo htmlspecialchars($todo['priority']); ?>" required>

            <!-- Submit Button -->
            <button type="submit" name="update" class="bg-blue-500 text-white p-2 rounded-md w-full">Update Todo</button>
            <button type="submit" name="delete" class="bg-red-500  mt-2 text-white p-2 rounded-md w-full">Delete Todo</button>
        </form>
    <?php else: ?>
        <p class="text-red-500">Todo not found.</p>
    <?php endif; ?>
</div>

</body>
</html>
