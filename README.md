# Login Page Project

## Owner:
**Name:** Ayon Adhikary Arko  
**ID:** 11220321013  

## Steps to Run the Project:

1. **Move Project Files**  
   - Place the project folder inside `xampp/htdocs`.

2. **Set Up the Database**  
   - Open [phpMyAdmin](http://localhost/phpmyadmin/).
   - Create a new database named **`login`**.
   - Create a table named **`users`** with the following columns:

     | Column Name | Data Type     | Constraints           |
     |------------|-------------|----------------------|
     | `id`      | `int(10)`    | Primary Key, Auto Increment |
     | `firstname` | `varchar(50)` | Not Null |
     | `lastname`  | `varchar(50)` | Not Null |
     | `email`     | `varchar(100)` | Not Null, Unique |
     | `password`  | `varchar(100)` | Not Null |

3. **Run the Project**  
   - Open your browser and go to: [http://localhost/DBMS_Login_Page/](http://localhost/DBMS_Login_Page/)

## Enjoy! 🎉
