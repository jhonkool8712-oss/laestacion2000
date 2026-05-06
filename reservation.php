<?php
$status = '';
if (isset($_GET['status']) && $_GET['status'] === 'ok') {
    $status = 'Reserva enviada correctamente. Nos comunicaremos pronto.';
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reservar Mesa - La Estación 2000</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header class="hero" style="min-height: 50vh;">
    <div class="hero-overlay"></div>
    <div class="hero-content">
      <h1>Reserva tu mesa</h1>
      <p>Completa el formulario y asegura tu lugar en nuestro restaurante.</p>
      <a href="index.html" class="btn btn-secondary">Inicio</a>
    </div>
  </header>
  <main style="padding: 2rem 1rem; max-width: 760px; margin: 0 auto;">
    <?php if ($status): ?>
      <div class="card" style="background: #eaf7ff; border-color: #b3e5ff;">
        <h2>¡Listo!</h2>
        <p><?= htmlspecialchars($status) ?></p>
      </div>
    <?php endif; ?>
    <div class="card">
      <h2>Formulario de reserva</h2>
      <form action="submit_reservation.php" method="post" style="display: grid; gap: 1rem;">
        <label>
          Nombre completo
          <input type="text" name="name" required placeholder="Tu nombre" style="width:100%; padding:0.95rem; border:1px solid #ddd; border-radius: 16px;">
        </label>
        <label>
          Correo electrónico
          <input type="email" name="email" required placeholder="correo@ejemplo.com" style="width:100%; padding:0.95rem; border:1px solid #ddd; border-radius: 16px;">
        </label>
        <label>
          Fecha de la reserva
          <input type="date" name="reservation_date" required style="width:100%; padding:0.95rem; border:1px solid #ddd; border-radius: 16px;">
        </label>
        <label>
          Personas
          <input type="number" name="people" min="1" max="12" required value="2" style="width:100%; padding:0.95rem; border:1px solid #ddd; border-radius: 16px;">
        </label>
        <label>
          Comentarios
          <textarea name="notes" rows="4" placeholder="Deseo una mesa tranquila, cumpleaños, etc." style="width:100%; padding:0.95rem; border:1px solid #ddd; border-radius: 16px;"></textarea>
        </label>
        <button class="btn btn-primary" type="submit" style="width: fit-content;">Enviar Reserva</button>
      </form>
    </div>
  </main>
  <footer class="footer">
    <p>&copy; 2026 La Estación 2000</p>
  </footer>
</body>
</html>
