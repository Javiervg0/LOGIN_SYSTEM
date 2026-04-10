<?php include("includes/header.php"); ?>

<?php 
    if (isset($_GET["message"])) {
        echo "<h4>" . htmlspecialchars($_GET["message"]) . "</h4>";
    }
?>

<form class="form" action="includes/login_process.php" method="post">

    <div class="form-group">
        <label for="uname">Username</label>
        <input type="text" id="uname" name="uname" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" class="form-control" required>
    </div>

    <div class="form-group mt-3">
        <input type="submit" name="login" value="Login" class="btn btn-success">
    </div>

</form>

<?php include('includes/footer.php'); ?>