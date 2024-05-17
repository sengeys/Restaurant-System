
<?php
    // include connection db
     include('../connection.php');

    // SQL query to select all customers
    $sql = "SELECT * FROM tblcustomer";
    $result = $conn->query($sql);

    $customers = array();

    if ($result->num_rows > 0) {
        // Fetch all customers data
        while($row = $result->fetch_assoc()) {
            $customers[] = $row;
        }
    } else {
        echo "0 results";
    }
    $conn->close();

    // Return the data as JSON
    echo json_encode($customers);
?>