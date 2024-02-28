# Project Name

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
