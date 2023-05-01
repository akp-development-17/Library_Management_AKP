# Library_Management_AKP
## Project Description 
A Responsive and Interactive Library Management Web Application is developed with the help of PHP , CSS , JavaScript ,MySQL,XAMPP,phpMyAdmin

### In this application one can 
1. `Sign Up/Register`
2. `Sign In/Login`
3.  `See all available books`
4. `Search books` 
5. `Reserve or Issue Books` 

## Installation Instruction 
### Software
Visual Studio Code Link :  https://visualstudio.microsoft.com/downloads/
XAMPP Control Panel link : https://sourceforge.net/projects/xampp/

### Extension
`PHP Live Server id` : brapifra.phpserver   `PHP Debug id` : xdebug.php-debug   `PHP Profiler` : DEVSENSE.profiler-php-vscode   `PHP Extension Pack` : xdebug.php-pack    
## Database 
All words used in sql are case sensitive.
Database named `library1` is created in XAMPP.

![image](https://user-images.githubusercontent.com/104623412/235435578-c93523ca-c025-4176-9ae8-eca168b58d4c.png)

In this database three schemas/tables named `user` , `books` , `reservation` are created :

![image](https://user-images.githubusercontent.com/104623412/235435724-c77bad68-7e1e-4489-83f4-29c35588d4d2.png)

### User table 
When a customer fills in the registration details , it is stored in user table . When a customer log in then login credentials are fetched from here and matched.

#### Structure 

![image](https://user-images.githubusercontent.com/104623412/235435841-405d7569-a73c-4313-b3e8-22480467e93c.png)

### Books table
It stores the details of books that are present in the library.

#### Structure

![image](https://user-images.githubusercontent.com/104623412/235436026-c8e67821-4e16-476f-9580-ebb7dd75e7c3.png)

### Reservation Table
When a person issues the book it sets the availability to no and stores the details of reserving

#### Structure

![image](https://user-images.githubusercontent.com/104623412/235436144-20948e86-df5f-4277-91bd-5dd16bd68f56.png)

## Usage
1. Fill the details to register

![image](https://user-images.githubusercontent.com/104623412/235436513-a8be4a4e-c851-4908-90e3-154af9929440.png)

2. After registering `Login` with your `userId` and `password`.

![image](https://user-images.githubusercontent.com/104623412/235436600-1434f977-aade-4151-a3cd-df196b61f41d.png)

3. If `userId` and `password` are correct then you will be directed to home page.

![image](https://user-images.githubusercontent.com/104623412/235436714-3f576030-44a6-4843-8a5f-9b50fbc00090.png)

4. `Search` for books

![image](https://user-images.githubusercontent.com/104623412/235436806-668476f7-25f4-4560-9f5a-53ddd0e0daca.png)

5. `List of Searched books appear`

![image](https://user-images.githubusercontent.com/104623412/235436913-f49e2a97-e7c0-42af-9c9a-8b63f111b392.png)

6. If you want to issue the book type the bookId of the book you want to reserve

![image](https://user-images.githubusercontent.com/104623412/235436952-adf8077c-c191-4a3f-a18e-5bdcc6c5d471.png)

7. Book is issued 
