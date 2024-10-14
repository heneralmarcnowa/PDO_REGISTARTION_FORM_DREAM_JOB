CREATE TABLE applicants (
    applicant_id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(255) NOT NULL,
    last_name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(255) NOT NULL,
    portfolio VARCHAR(255) NOT NULL,
    experience INT NOT NULL,
    skills TEXT NOT NULL,
    cover_letter TEXT NOT NULL
);