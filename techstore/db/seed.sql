INSERT INTO cats(name) VALUES ('laptop'), ('pc'), ('mobile');
INSERT INTO products(name, `desc`, price, pices_no, img, cat_id) VALUES
('laptop 1', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Natus, ipsum?', 15000, 10, '1.jpg', 1),
('laptop 2', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Natus, ipsum?', 50530, 2, '2.jpg', 1),
('laptop 3', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Natus, ipsum?', 15648, 8, '3.jpg', 1),
('pc 4', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Natus, ipsum?', 6000, 10, '3.jpg', 2),
('pc 5', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Natus, ipsum?', 11100, 10, '4.jpg', 2),
('pc 6', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Natus, ipsum?', 14580, 10, '5.jpg', 2),
('mobile 7', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Natus, ipsum?', 4300, 10, '6.jpg', 3),
('mobile 8', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Natus, ipsum?', 5300, 50, '7.jpg', 3),
('mobile 9', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Natus, ipsum?', 6000, 30, '8.jpg', 3),
('laptop 4', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Natus, ipsum?', 10200, 6, '9.jpg', 1);

INSERT INTO admins(name, email, password) 
VALUES
('Mohamed Eid', 'mohamed@mohamed.com', '$2y$10$UdVI6YNBQ9VeV8w9u4CiJu1tSajpKUO.Pd1.LsRBn31vyLDM0TjGS');