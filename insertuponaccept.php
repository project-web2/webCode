<?php
$user ='root';
$pass = '';
$database = 'CPUber';
$conn = new mysqli('localhost', $user, $pass, $database) or die('unable to connect');
?>

<?php
if(isset($_GET['id']) && !empty($_GET['id']))
{
    $id = $_GET['id'];
    $tid = $_GET['tid'];
    $update = "UPDATE request SET technician_id = $tid WHERE Rid ='$id'";

    if (mysqli_query($conn, $update))
    {
        echo "Record updated successfully";
    }
    else
    {
        echo "Error updating record: " . mysqli_error($conn);
    }
    die;
}


?>
