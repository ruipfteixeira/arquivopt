DROP TABLE IF EXISTS category;
DROP TABLE IF EXISTS pets;
DROP TABLE IF EXISTS users;
DROP TABLE IF EXISTS favourite;
DROP TABLE IF EXISTS adoptionrequest;
DROP TABLE IF EXISTS message;
DROP TABLE IF EXISTS question;
DROP TABLE IF EXISTS answer;



CREATE TABLE category (
  id INTEGER PRIMARY KEY ,
  name VARCHAR NOT NULL
);

CREATE TABLE pets (
  id INTEGER PRIMARY KEY ,
  name VARCHAR NOT NULL,
  description VARCHAR NOT NULL,
  size VARCHAR NOT NULL,
  location VARCHAR NOT NULL,
  gender VARCHAR NOT NULL,
  type VARCHAR NOT NULL,
  cat_id INTEGER REFERENCES category NOT NULL,
  owner_id INTEGER NOT NULL,
  adopted_at DATETIME 
);

CREATE TABLE users (
  user_id INTEGER PRIMARY KEY ,
  username VARCHAR NOT NULL UNIQUE,
  password VARCHAR
);

CREATE TABLE favourite (
  user_id INTEGER NOT NULL,
  pet_id INTEGER NOT NULL,
  pet_name INTEGER NOT NULL,
  PRIMARY KEY (user_id,pet_id)
);

CREATE TABLE adoptionrequest(
  id INTEGER PRIMARY KEY,
  owner_id INTEGER NOT NULL,
  pet_id INTEGER NOT NULL,
  pet_name INTEGER NOT NULL,
  requestor_id INTEGER NOT NULL,
  status INTEGER NOT NULL
);

CREATE TABLE message(
  id INTEGER PRIMARY KEY ,
  receiver_id INTEGER NOT NULL,
  sender_id INTEGER NOT NULL,
  pet_id INTEGER NOT NULL,
  message VARCHAR(500),
  timestamp DATETIME
);

CREATE TABLE question (
  id INTEGER PRIMARY KEY ,
  pet_id INTEGER,
  user_id INTEGER,
  message VARCHAR (500),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP  
);

CREATE TABLE answer (
  id INTEGER PRIMARY KEY ,
  question_id INTEGER REFERENCES question NOT NULL,
  user_id INTEGER,
  message VARCHAR (500),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP  
);

INSERT INTO users(username,password) VALUES ('Maria', 'bla');
INSERT INTO users(username,password) VALUES ('Joao', 'bla');
INSERT INTO users(username,password) VALUES ('Lucas', 'bla');
INSERT INTO users(username,password) VALUES ('Lorenzo', 'bla');
INSERT INTO users(username,password) VALUES ('Debura', 'bla');
INSERT INTO users(username,password) VALUES ('Lizzie', 'bla');
INSERT INTO users(username,password) VALUES ('Adriana', 'bla');

INSERT INTO category VALUES (1, 'Dogs');

INSERT INTO pets VALUES (1, 'Luke', 'Black', 'Small', 'Leiria', 'Male', 'Dog', 1, 'Maria',NULL);
INSERT INTO pets VALUES (2, 'Alfred', 'Black', 'Small', 'Leiria', 'Male', 'Dog', 1, 'Lizzie',NULL);
INSERT INTO pets VALUES (3, 'Raposa', 'Black', 'Small', 'Leiria', 'Male', 'Dog', 1, 'Joao',NULL);
INSERT INTO pets VALUES (4, 'Chico', 'Black', 'Small', 'Leiria', 'Male', 'Dog', 1, 'Debura',NULL);
INSERT INTO pets VALUES (5, 'Bola', 'Black', 'Small', 'Leiria', 'Male', 'Dog', 1, 'Lorenzo',NULL);
INSERT INTO pets VALUES (6, 'Lassie', 'Black', 'Small', 'Leiria', 'Male', 'Dog', 1, 'Lorenzo',NULL);
INSERT INTO pets VALUES (7, 'Lina', 'Black', 'Small', 'Leiria', 'Male', 'Dog', 1, 'Lorenzo',NULL);
INSERT INTO pets VALUES (8, 'Zippy', 'Black', 'Small', 'Leiria', 'Male', 'Dog', 1, 'Maria',NULL);

INSERT INTO category VALUES (2, 'Cats');

INSERT INTO pets VALUES (9, 'Mr. Grey', 'Grey', 'Small', 'Lisboa', 'Male', 'Cat', 2, 'Lucas',NULL);
INSERT INTO pets VALUES (10, 'Mr. Red', 'Grey', 'Small', 'Lisboa', 'Male', 'Cat', 2, 'Lucas',NULL);
INSERT INTO pets VALUES (11, 'Mr. Blue', 'Grey', 'Small', 'Lisboa', 'Male', 'Cat', 2, 'Adriana',NULL);
INSERT INTO pets VALUES (12, 'Mr. Green', 'Grey', 'Small', 'Lisboa', 'Male', 'Cat', 2, 'Adriana',NULL);
INSERT INTO pets VALUES (13, 'Mr. Yellow', 'Grey', 'Small', 'Lisboa', 'Male', 'Cat', 2 , 'Lizzie',NULL);
INSERT INTO pets VALUES (14, 'Mr. Purple', 'Grey', 'Small', 'Lisboa', 'Male', 'Cat', 2, 'Joao',NULL);
INSERT INTO pets VALUES (15, 'Mr. Pink', 'Grey', 'Small', 'Lisboa', 'Male', 'Cat', 2, 'Maria',NULL);
INSERT INTO pets VALUES (16, 'Mr. White', 'Grey', 'Small', 'Lisboa', 'Male', 'Cat', 2, 'Adriana',NULL);

CREATE TABLE message(
  id INTEGER PRIMARY KEY ,
  receiver_id INTEGER NOT NULL,
  sender_id INTEGER NOT NULL,
  pet_id INTEGER NOT NULL,
  message VARCHAR(500),
  timestamp DATETIME
);