<?php
require 'config.php';
$result = $mysqli->query('SELECT * FROM menu_items ORDER BY category, name');
$items = [];
if ($result) {
    while ($row = $result->fetch_assoc()) {
        $items[] = $row;
    }
    $result->free();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Menú - La Estación 2000</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header class="hero" style="min-height: 50vh;">
    <div class="hero-overlay"></div>
    <div class="hero-content">
      <h1>Menú del Restaurante</h1>
      <p>Explora nuestros platos preparados con ingredientes frescos y presentaciones cuidadas.</p>
      <a href="index.html" class="btn btn-secondary">Volver al inicio</a>
    </div>
  </header>
  <main style="padding: 2rem 1rem; max-width: 1100px; margin: 0 auto;">
    <?php if (count($items) === 0): ?>
      <div class="card">
        <h2>Menú vacío</h2>
        <p>No se encontraron platos en la base de datos. Importa <code>db.sql</code> y revisa la conexión MySQL.</p>
      </div>
    <?php else: ?>
      <?php $currentCategory = ''; ?>
      <?php foreach ($items as $item): ?>
        <?php if ($item['category'] !== $currentCategory): ?>
          <?php $currentCategory = $item['category']; ?>
          <h2 style="margin-top: 2rem; color: #ff7d2a; text-transform: uppercase; letter-spacing: 0.12em;"><?= htmlspecialchars($currentCategory) ?></h2>
        <?php endif; ?>
        <article class="card">
          <h3><?= htmlspecialchars($item['name']) ?> <span style="float:right; color:#ff7d2a;">COP <?= number_format($item['price'], 0, ',', '.') ?></span></h3>
          <p><?= htmlspecialchars($item['description']) ?></p>
        </article>
      <?php endforeach; ?>
    <?php endif; ?>
  </main>
  <footer class="footer">
    <p>&copy; 2026 La Estación 2000</p>
  </footer>
</body>
</html>
