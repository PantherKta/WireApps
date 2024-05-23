# Pharmacy Management System

## Introduction

This project is a RESTful API for a pharmacy management system, designed to streamline business processes such as medication inventory management, customer record management, and user authentication. This README provides instructions for running the project locally, including setup instructions and dependencies.

## Installation

1. Clone the repository:
2. Navigate to the project directory:
3. Install dependencies:
4. Create a copy of the `.env.example` file and rename it to `.env`:
5. Generate application key:


6. Configure the database connection in the `.env` file:
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_username
DB_PASSWORD=your_database_password
7. Migrate the database:
8. Seed the database with test data (optional):

## Running the Application

To run the application, use the following command:


The API will be accessible at `http://localhost:8000`.

## API Endpoints

Please refer to the provided Postman collection for available API endpoints and usage examples.

## Database Schema and Models

The database schema is represented by the following Entity-Relationship (ER) diagram:

[Insert ER Diagram Image Here]

### Models

1. User
   - Fields: id, name, username, password, role

2. Medication
   - Fields: id, name, description, quantity

3. Customer
   - Fields: id, name, contact_info, address

## Postman Collection

Refer to the included Postman collection for API testing. Import the collection into Postman and execute requests against the local API.

## Dependencies

- Laravel Framework
- Laravel Eloquent ORM
- SQLite Database (for storing test data)



