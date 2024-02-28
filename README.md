# Challenge Module Zone

## Description

This project is a PHP application built using Laravel framework.

## Prerequisites

Before running the project, make sure you have the following software installed:

- XAMPP: A cross-platform web server solution that includes Apache, MySQL, PHP, and more.
- Composer: A dependency manager for PHP.

## Installation

### Step 1: Decompress the Folder

1. Download the project folder from the repository.
2. Locate the downloaded folder on your computer.
3. Right-click on the folder and select "Extract" or "Decompress" to extract its contents.

### Step 2: Install XAMPP

1. Download XAMPP from the official website (https://www.apachefriends.org/index.html).
2. Run the installer and follow the on-screen instructions.
3. Choose the components you want to install (Apache, MySQL, PHP, etc.).
4. Select the installation directory and complete the installation process.

### Step 3: Install Composer

1. Download Composer from the official website (https://getcomposer.org/download/).
2. Run the installer and follow the on-screen instructions.
3. Choose the installation directory and complete the installation process.

### Step 4: Run the Project

1. Open XAMPP Control Panel.
2. Start the Apache and MySQL services.
3. Open your web browser and enter "http://localhost/phpmyadmin" to access phpMyAdmin.
4. Create a new database for your project.
5. Open a command prompt or terminal and navigate to the project folder.
6. Run the following command to install project dependencies:
   ```bash
   composer install
   ```

## Some mistakes with the php.ini

To correct the issue, follow these steps:

1. Locate the `php.ini` file in your XAMPP installation directory. Typically, it's located in `xampp\php\php.ini`.

2. Open the `php.ini` file in a text editor.

3. Search for the following line: ;extension=mysqli

4. Remove the semicolon (`;`) at the beginning of the line to uncomment it: extension=mysqli

5. Save the changes and close the `php.ini` file.

6. Restart the Apache server from the XAMPP Control Panel.

After making these changes, the `mysqli` extension should be enabled and the issue should be resolved.

## How to use the models

1. **Database Configuration**: Open the project in your preferred code editor. Navigate to the `.env` file in the root directory of the project. Update the database configuration parameters such as `DB_HOST`, `DB_PORT`, `DB_DATABASE`, `DB_USERNAME`, and `DB_PASSWORD` according to your local database settings.

2. **Migrate the Database**: Run the following command in your terminal to migrate the database schema to your local database:

   ```bash
   php artisan migrate
   ```

   This command will create the necessary tables in your local database based on the migrations defined in the project.

3. **Seed the Database (Optional)**: If the project includes seeders to populate the database with initial data, you can run the following command to execute the seeders:

   ```bash
   php artisan db:seed
   ```

   This will populate the database with sample data defined in the seeders.

4. **Using the Model**: Now that the database is set up, you can use the model within your project to interact with the database. In your controllers or other parts of the application, import the model class and use its methods to perform CRUD (Create, Read, Update, Delete) operations on the database.

5. **Accessing phpMyAdmin**: To access phpMyAdmin and view the database tables, open your web browser and enter the URL to phpMyAdmin. This URL is typically `http://localhost/phpmyadmin`. Log in with the username and password set during your XAMPP or database installation.

## How to run the program

Finally you can run the program using Artisan's serve command to start a development server. Run the following command:

    ```bash
    php artisan serve
    ```

This will start a development server at http://localhost:8000, allowing you to access the application in your web browser.
