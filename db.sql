-- Base de datos para La Estación 2000
-- Crea la base y las tablas en MySQL

CREATE DATABASE IF NOT EXISTS jhonatan1_restaurant_db CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE jhonatan1_restaurant_db;

CREATE TABLE IF NOT EXISTS menu_items (
  id INT AUTO_INCREMENT PRIMARY KEY,
  category VARCHAR(80) NOT NULL,
  name VARCHAR(120) NOT NULL,
  description TEXT NOT NULL,
  price DECIMAL(7,2) NOT NULL DEFAULT 0.00
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO menu_items (category, name, description, price) VALUES
('Entradas', 'Bruschetta de tomate', 'Pan crocante con tomate, albahaca y aceite de oliva.', 8.50),
('Entradas', 'Ceviche tropical', 'Mariscos frescos con lima, mango y cilantro.', 12.90),
('Principales', 'Pollo al horno con especias', 'Pechuga jugosa con puré cremoso y vegetales al vapor.', 16.80),
('Principales', 'Risotto de champiñones', 'Arroz cremoso con setas silvestres y queso parmesano.', 15.90),
('Principales', 'Filete de salmón', 'Salmón a la plancha con salsa de hierbas y ensalada fresca.', 18.50),
('Postres', 'Tarta de limón', 'Base crujiente con crema de limón y merengue tostado.', 7.20),
('Postres', 'Brownie con helado', 'Brownie caliente servido con helado de vainilla.', 7.80);

CREATE TABLE IF NOT EXISTS reservations (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(120) NOT NULL,
  email VARCHAR(150) NOT NULL,
  reservation_date DATE NOT NULL,
  people INT NOT NULL,
  notes TEXT,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
