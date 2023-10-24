# MAMP (Mac, Apache, MySQL, PHP) Web Server Installation Guide

MAMP is a popular web server solution for macOS, which allows you to easily set up a local development environment for web development. This guide will walk you through the installation process.

## Prerequisites

Before you begin, ensure you have the following:

- A macOS computer (MAMP is specifically designed for macOS).
- Administrative privileges on your computer.

## Installation Steps

Follow these steps to install MAMP on your macOS:

## 1. Download MAMP:
   - Visit the official MAMP website: [https://www.mamp.info](https://www.mamp.info)
   - Click on the "Download MAMP & MAMP PRO" button.
   - Download the free version of MAMP by clicking the "MAMP & MAMP PRO" button under "MAMP & MAMP PRO".
   
## 2. Install MAMP:
   - Locate the downloaded MAMP package in your Downloads folder (or the location you chose).
   - Double-click on the package to start the installation.
   - Follow the on-screen instructions to complete the installation.
   
## 3. Launch MAMP:
   - Once the installation is complete, open the "Applications" folder and find the "MAMP" folder.
   - Launch the "MAMP" application.

## 4. Start Servers:
   - In the MAMP application, click the "Start Servers" button.
   - Apache and MySQL servers will start, and you'll see green indicators next to them.

## 5. Access Web Server:
   - Open your web browser and enter the following URL to access your local web server:
     ```
     http://localhost:8888/
     ```
   - You should see the MAMP welcome page if the installation was successful.

 ## 6. Use PHPMyAdmin:
   - MAMP includes PHPMyAdmin for managing your MySQL databases. You can access it by visiting:
     ```
     http://localhost:8888/phpMyAdmin/
     ```
   - You can restore the needed database with the m151.sql file in this repository, the initial credentials (which should be changed) can be found in the db_connection.php file
   - Also remember to create a new user, with limited permission, for better security and only grant it access to these databases

## 7. Replace htdocs content
After following the instalation steps, all that is left is to do copy the contents of this repository and put them in the htdocs folder


# Installing Apache Web Server on Windows using XAMPP

In this guide, we will walk you through the process of installing the Apache web server on a Windows system using XAMPP. XAMPP is a popular software package that includes Apache, MySQL, PHP, and other web development tools.

## Prerequisites

Before you begin, make sure you have the following:

- A Windows operating system (this guide is written for Windows 10)
- Administrator privileges on your computer
- Internet access to download XAMPP

## Step 1: Download XAMPP

- Visit the [Apache Friends website](https://www.apachefriends.org/index.html) to download XAMPP.

- Choose the version of XAMPP that corresponds to your Windows architecture (32-bit or 64-bit).

- Click the download link to start the download.

## Step 2: Install XAMPP

- Locate the downloaded XAMPP installer and double-click on it to start the installation process.

- Follow the on-screen instructions. You can choose the default settings for most options.

- During installation, you may be prompted by Windows to allow the installer to make changes to your system. Click "Yes" to continue.

- Once the installation is complete, make sure the "Start the Control Panel now" option is checked and click "Finish."

## Step 3: Start Apache

- In the XAMPP Control Panel, locate the "Apache" module and click the "Start" button to start the Apache web server.

- If the Apache server starts successfully, you'll see a green running indicator next to the Apache module.

## Step 4: Test Your Web Server

- Open your web browser and enter `http://localhost` in the address bar.

- If the Apache web server is running correctly, you should see the XAMPP welcome page.

## Step 5: Use PHPMyAdmin:
   - MAMP includes PHPMyAdmin for managing your MySQL databases. You can access it by visiting:
     ```
     http://localhost:8888/phpMyAdmin/
     ```
   - You can restore the needed database with the m151.sql file in this repository, the initial credentials (which should be changed) can be found in the db_connection.php file
   - Also remember to create a new user, with limited permission, for better security and only grant it access to these databases

## 6. Replace htdocs content
After following the instalation steps, all that is left is to do copy the contents of this repository and put them in the htdocs folder
