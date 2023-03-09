<?php
// Connect to database
$db = mysqli_connect("localhost", "root", "", "watch_db");

// Check if the form has been submitted
if (isset($_POST['submit'])) {
  // Get the search term
  $search = mysqli_real_escape_string($db, $_POST['search']);

  // Write the SQL query
  $query = "SELECT * FROM products WHERE products_name LIKE '%$search%'";

  // Execute the query
  $result = mysqli_query($db, $query);

  // Check if any results were returned
  if (mysqli_num_rows($result) > 0) {
    // Print the results
    while ($row = mysqli_fetch_array($result)) {
      echo $row['products_name'] . "<br>";
    }
  } else {
    // No results were found
    echo "No results found.";
  }
}
?>