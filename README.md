# La Estación 2000

Aplicación web de restaurante en PHP y MySQL, lista para desplegar desde GitHub a Alwaysdata.

## Archivos principales

- `index.html` - Página de presentación temática con imágenes y transiciones.
- `style.css` - Estilos visuales para fondo, tarjetas y botones.
- `menu.php` - Página que muestra el menú cargado desde MySQL.
- `reservation.php` - Formulario para reservar mesa.
- `submit_reservation.php` - Guarda reservas en la base de datos.
- `config.php` - Conexión MySQL (ajusta usuario/contraseña/host).
- `db.sql` - Esquema MySQL para crear tablas y contenido inicial.

## Configuración MySQL

1. En tu panel de Alwaysdata, crea una base de datos `jhonatan1_restaurant_db` o el nombre que prefieras.
2. Ajusta `config.php` con tus credenciales de Alwaysdata.
3. Importa `db.sql` en la base de datos.

Ejemplo de host Alwaysdata:

```php
$host = 'mysql-jhonatan1.alwaysdata.net';
$username = 'jhonatan1';
$password = 'tu_password';
$database = 'jhonatan1_restaurant_db';
```

## Despliegue con GitHub Actions y Alwaysdata

- Asegúrate de subir este repositorio a GitHub.
- En `.github/workflows/deployAlways.yml` ya tienes una acción configurada para desplegar por FTP.
- Define los secretos en GitHub: `FTP_USERNAME` y `FTP_PASSWORD`.

## Notas

- `index.html` usa imágenes de internet para el tema gastronómico.
- `menu.php` y `reservation.php` requieren servidor PHP con acceso a MySQL.
- Para probar localmente, usa un servidor PHP como XAMPP, WAMP o la línea de comandos `php -S localhost:8000`.
