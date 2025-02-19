Student Fingerprint Registration System
Description
This PHP-based project is designed to register and manage student fingerprint data for identification purposes. It connects to a MySQL database, retrieves the last fingerprint_id, increments it to create a new unique ID, and inserts the new record into the fingerprints table. The project also contains the functionality to handle student data, with an example student ID for testing.

Features
Database Connection: Establishes a connection to the MySQL database to fetch and insert data.
Fingerprint Management: Retrieves the last fingerprint_id from the database, increments it, and inserts a new fingerprint record with a unique ID.
Insert New Record: Adds a new fingerprint entry associated with a student ID.
Error Handling: Provides feedback in case of a failure during database operations.
Prerequisites
PHP 7.0 or higher
MySQL Database
A local server like XAMPP 
