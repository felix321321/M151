# MAMP (Mac, Apache, MySQL, PHP) Web Server Installation Guide

MAMP is a popular web server solution for macOS, which allows you to easily set up a local development environment for web development. This guide will walk you through the installation process.

## Prerequisites

Before you begin, ensure you have the following:

- A macOS computer (MAMP is specifically designed for macOS).
- Administrative privileges on your computer.

## Installation Steps

Follow these steps to install MAMP on your macOS:

1. **Download MAMP**:
   - Visit the official MAMP website: [https://www.mamp.info](https://www.mamp.info)
   - Click on the "Download MAMP & MAMP PRO" button.
   - Download the free version of MAMP by clicking the "MAMP & MAMP PRO" button under "MAMP & MAMP PRO".
   
2. **Install MAMP**:
   - Locate the downloaded MAMP package in your Downloads folder (or the location you chose).
   - Double-click on the package to start the installation.
   - Follow the on-screen instructions to complete the installation.
   
3. **Launch MAMP**:
   - Once the installation is complete, open the "Applications" folder and find the "MAMP" folder.
   - Launch the "MAMP" application.

4. **Start Servers**:
   - In the MAMP application, click the "Start Servers" button.
   - Apache and MySQL servers will start, and you'll see green indicators next to them.

5. **Access Web Server**:
   - Open your web browser and enter the following URL to access your local web server:
     ```
     http://localhost:8888/
     ```
   - You should see the MAMP welcome page if the installation was successful.

6. **Web Root Directory**:
   - By default, MAMP uses the `/Applications/MAMP/htdocs/` directory as the web root. You can place your web project files in this directory.

7. **PHPMyAdmin**:
   - MAMP includes PHPMyAdmin for managing your MySQL databases. You can access it by visiting:
     ```
     http://localhost:8888/phpMyAdmin/
     ```
   - You can restore the needed database with the m151.sql file in this repository, the initial credentials (which should be changed) can be found in the db_connection.php file
   - Also remember to create a new user, with limited permission, for better security and only grant it access to these databases
   
8. **Stop Servers**:
   - To stop the servers, return to the MAMP application and click the "Stop Servers" button.

9. **Quit MAMP**:
   - You can quit the MAMP application when you're done using it.

## Additional Configuration

- MAMP allows you to configure various settings, such as the PHP version, ports, and virtual hosts. You can access these settings through the MAMP application preferences.

That's it! You've successfully installed MAMP and set up a local web server on your macOS computer. You can now start developing and testing web applications in your local environment.

## Replace htdocs content
After following the instalation steps, all that is left is to do copy the contents of this repository and put them in the htdocs folder