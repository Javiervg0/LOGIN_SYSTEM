<?php include("dbcon.php"); ?>
<?php session_start(); ?>

<?php
if(isset($_POST["login"])){

    $username = $_POST["uname"];
    $email = $_POST["email"];

    $query = "SELECT * FROM users WHERE username = '$username' AND email_id = '$email'";
    $result = mysqli_query($con, $query);

    if(!$result){
        die("Query Failed: " . mysqli_error($con));
    } 

    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        $_SESSION["username"] = $row["username"];
        header("location: ../home.php");
        exit();
    } else {
        header("location: ../index.php?message=Sorry, your username or email is invalid");
        exit();
    }
}
?>