-- 1. Membuat Database
CREATE DATABASE myshop;

-- 2. Membuat Tabel di Dalam Database
USE myshop;

CREATE TABLE users (
    id INTEGER AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    email VARCHAR(255),
    password VARCHAR(255)
);

CREATE TABLE categories (
    id INTEGER AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255)
);

CREATE TABLE items (
    id INTEGER AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    description VARCHAR(255),
    price INTEGER,
    stock INTEGER,
    category_id INTEGER,
    FOREIGN KEY (category_id) REFERENCES categories(id)
);

-- 3. Memasukkan Data pada Tabel
INSERT INTO users (name, email, password) VALUES
('John Doe', 'john@doe.com', 'john123'),
('Jane Doe', 'jane@doe.com', 'jenita123');

INSERT INTO categories (name) VALUES
('gadget'),
('cloth'),
('men'),
('women'),
('branded');

INSERT INTO items (name, description, price, stock, category_id) VALUES
('Sumsang b50', 'hape keren dari merek sumsang', 4000000, 100, 1),
('Uniklooh', 'baju keren dari brand ternama', 500000, 50, 2),
('IMHO Watch', 'jam tangan anak yang jujur banget', 2000000, 10, 1);

-- 4. Mengambil Data dari Database
-- a. Mengambil data users (tanpa password)
SELECT id, name, email FROM users;

-- b. Mengambil data items dengan harga di atas 1000000
SELECT * FROM items WHERE price > 1000000;

-- b. Mengambil data items dengan name mirip "watch"
SELECT * FROM items WHERE name LIKE '%watch%';

-- c. Menampilkan data items join dengan kategori
SELECT 
    items.name,
    items.description,
    items.price,
    items.stock,
    items.category_id,
    categories.name AS kategori
FROM items
JOIN categories ON items.category_id = categories.id
WHERE categories.id IN (1, 2);

-- 5. Mengubah Data dari Database
UPDATE items
SET price = 2500000
WHERE name = 'Sumsang b50';
