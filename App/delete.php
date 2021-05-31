<?php
include_once 'connection.php';
$sql = "DELETE FROM dashboard WHERE id='" . $_GET["id"] . "'";
if (mysqli_query($conn, $sql)) {
    echo ("<script LANGUAGE='JavaScript'>
          window.alert('vaccine record successfully deleted');
          window.location.href='http://localhost/app/userinfo.php';
       </script>");
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>