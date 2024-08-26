-- Create a database
CREATE DATABASE mydatabase;

-- Use the database
USE mydatabase;

-- Create a table
CREATE TABLE users (
    id SERIAL PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100) UNIQUE
);

-- Insert data into the table
INSERT INTO users (name, email) VALUES ('John Doe', 'john@example.com');
