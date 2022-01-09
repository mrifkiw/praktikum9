CREATE TABLE `karyawan` (
  `id` int(11) Not NULL PRIMARY KEY AUTO_INCREMENT COMMENT 'Primary Key',
  `name` varchar(225) NOT NULL,
  `email` varchar(255) Unique NOT NULL,
  `address` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `status` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

Drop TABLE `karyawan`;

INSERT INTO karyawan(name, email, address, gender, position, status) VALUES
('Adam', 'adam@gmail.com', 'Jl. Lorem Ipsum', 'Male', 'Fullstack', 'Fulltime'),
('Eve', 'eve@gmail.com', 'Jl. Lorem Ipsum', 'Female', 'Mobile Dev', 'Parttime');
INSERT INTO karyawan(name, email, address, gender, position, status) VALUES
('Eve', 'eve@gmail.com', 'Jl. Lorem Ipsum', 'Female', 'Mobile Dev', 'Parttime');