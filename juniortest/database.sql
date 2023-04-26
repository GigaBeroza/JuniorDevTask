CREATE TABLE `products` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `sku` varchar(255) DEFAULT NULL,
 `name` varchar(255) DEFAULT NULL,
 `price` decimal(20,2) DEFAULT NULL,
 `type` enum('dvd','book','furniture') DEFAULT NULL,
 `dvd_size` decimal(20,0) DEFAULT NULL,
 `book_weight` decimal(20,0) DEFAULT NULL,
 `furniture_height` decimal(20,0) DEFAULT NULL,
 `furniture_width` decimal(20,0) DEFAULT NULL,
 `furniture_length` decimal(20,0) DEFAULT NULL,
 PRIMARY KEY (`id`),
 UNIQUE KEY `sku` (`sku`)
)