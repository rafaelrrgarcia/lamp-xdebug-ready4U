-- Create users table
CREATE TABLE users (
  id INT PRIMARY KEY AUTO_INCREMENT,
  user VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL,
  pass CHAR(64) NOT NULL,
  dt_register TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  dt_update TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Insert user in table
INSERT INTO users (user, email, pass) VALUES (
  'John Doe',
  'john@doe.com',
  SHA2('johndoe123', 256)
);