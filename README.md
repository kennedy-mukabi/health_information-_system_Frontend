# health_information-_system_Frontend
Our group identified a health institution as our target and aimed at automating some of the 
analog ways of record keeping by introducing databases and Ui/ux for 
accessing and managing the records of patients , health workers and scheduled appointments 
of various patients to their specific doctors.

![alt text](https://github.com/kennedy-mukabi/Health_Information_system/blob/main/dashboard.png?raw=true)

## Group Members
* Tonui SCCJ/00779/2019
* Mukabi SCCJ/01446/2019
* Radol SCCJ/01439/2019
* Timothy SCCJ/01439/2019
* Arthur SCCJ/01435/2019
* phil CT

## Instruction on how to run the Docker file

```
docker run -it --rm --name my-running-app health_information_system
docker run -d -p 80:80 --name my-apache-php-app -v "$PWD":/var/www/html php:7.2-apache # This line for *nix users
docker run -d -p 80:80 --name my-apache-php-app -v C:\Users\fastp\Desktop\Code\tutorials\php-docker:/var/www/html php:7.2-apache   # For Windows users
```
then open your browser on (http://localhost:80)


## Installation on a local machine

install xampp

create database using Mysql

```bash
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `user_type` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
```

## Usage

Clone the repository
save files to htdocs under xampp files
open the browser 127.0.0.1 to view your database 
to get to a web page initiate the path with localhost/

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.


