-- Create the main registration table
CREATE TABLE Registration (
  registration_id INT PRIMARY KEY AUTO_INCREMENT,
  event_type VARCHAR(50),
  sub_event_type VARCHAR(50),
  name VARCHAR(50),
  email VARCHAR(50),
  phone VARCHAR(15)
);

-- Create the indoor events table
CREATE TABLE Indoor_Event (
  event_id INT PRIMARY KEY AUTO_INCREMENT,
  indoor_event_name VARCHAR(50)
);

-- Create the outdoor events table
CREATE TABLE Outdoor_Event (
  event_id INT PRIMARY KEY AUTO_INCREMENT,
  outdoor_event_name VARCHAR(50)
);

-- Create the table to establish a relationship between registration and indoor events
CREATE TABLE Indoor_Registration (
  registration_id INT,
  event_id INT,
  FOREIGN KEY (registration_id) REFERENCES Registration(registration_id),
  FOREIGN KEY (event_id) REFERENCES Indoor_Event(event_id)
);

-- Create the table to establish a relationship between registration and outdoor events
CREATE TABLE Outdoor_Registration (
  registration_id INT,
  event_id INT,
  FOREIGN KEY (registration_id) REFERENCES Registration(registration_id),
  FOREIGN KEY (event_id) REFERENCES Outdoor_Event(event_id)
);



-- Create the admin table
CREATE TABLE admin (
  username VARCHAR(50) PRIMARY KEY,
  password VARCHAR(50)
);
-- Insert "Saif" username
INSERT INTO admin (username, password)
VALUES ('Saif', '123');

-- Insert "Hashir" username
INSERT INTO admin (username, password)
VALUES ('Hashir', '123');

-- Insert "Gujjar" username
INSERT INTO admin (username, password)
VALUES ('Gujjar', '123');
