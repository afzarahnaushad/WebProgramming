<?php
//Step 1. Connect to the database.
//Step 2. Handle connection errors
//including the database connection file
include("../config.php");

//getting isbn of the data from url
$memberID = $_GET['memberID'];

//3. Execute the SQL query.
//deleting the row from table
$result = mysqli_query($conn, "DELETE FROM transactions WHERE MemberID =$memberID")or die(mysqli_error($conn));
$query = mysqli_query($conn, "DELETE FROM members WHERE MemberID =$memberID")or die(mysqli_error($conn));

//Step 5: Freeing Resources and Closing Connection using mysqli
mysqli_close($conn);

//4. Process the results.
//redirecting to the display page (book.php in our case)
header("Location:member.php");

?>