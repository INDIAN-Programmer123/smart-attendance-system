CREATE DATABASE attendance;

USE attendance;

CREATE TABLE students (
    id INT PRIMARY KEY,
    name VARCHAR(50)
);

INSERT INTO students VALUES
(1, 'jenish'),
(2, 'purvaraj'),
(3, 'vishva');

CREATE TABLE attendance_log (
    id INT AUTO_INCREMENT PRIMARY KEY,
    student_id INT,
    time TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
