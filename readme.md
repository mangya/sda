<div align="center">
    <img src="/public/img/logo.jpg">
</div>

### Prerequisites

1. ```Composer```
2. ```PHP >= 7.1```
3. ```MySQL```

## Steps to setup up on local

1. Clone the repository with `https://github.com/mangya/sda.git <your_project_folder_name>`
2. Change directory to your project folder `cd <your_project_folder_name>`
3. Install the dependencies with `composer install`
4. Create database in MySQL.
5. Update the your database name and credentials in the `.env` file.
6. Set permissions for the folders in (Optional only for Linux)

```
sudo chown -R :www-data bootstrap/cache
sudo chmod -R ug+rwx bootstrap/cache
sudo chown -R :www-data storage/framework
sudo chmod -R ug+rwx storage/framework
sudo chown -R :www-data storage/logs
sudo chmod -R ug+rwx storage/logs
```
7. Create database tables and sample data with `php artisan migrate:refresh --seed`
8. Run the application with `php artisan serve` (MySQL service should be up and running).
9. Access `http://localhost:8000` and you're ready to go!
  
## Login Credentials:
  
Administrator

**Login URL**: http://localhost:8081/admin  
**Login ID**: mangesh  
**Password**: vsmsda@111

<img alt="Laravel" src="https://img.shields.io/badge/laravel-%23FF2D20.svg?&style=for-the-badge&logo=laravel&logoColor=white"/><img alt="MySQL" src="https://img.shields.io/badge/MySQL-00000F?style=for-the-badge&logo=mysql&logoColor=white"/>