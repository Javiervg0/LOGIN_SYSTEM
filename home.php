<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("location: index.php?message=Por favor inicia sesión primero");
    exit();
}
?>

<?php include("includes/header.php"); ?>

<div class="text-center mt-5">
    <div class="mb-3">
        <span style="font-size: 64px;">👤</span>
    </div>

    <h2 class="mb-1">¡Hola, <?php echo htmlspecialchars($_SESSION["username"]); ?>!</h2>
    <p class="text-muted">Bienvenido de nuevo. Has iniciado sesión correctamente.</p>

    <hr class="my-4" style="max-width: 400px; margin: auto;">

    <p class="text-muted small">
        Sesión iniciada como: <strong><?php echo htmlspecialchars($_SESSION["username"]); ?></strong>
    </p>

    <a href="includes/logout_process.php" class="btn btn-danger mt-3">
        Cerrar sesión
    </a>
</div>

<?php include("includes/footer.php"); ?>