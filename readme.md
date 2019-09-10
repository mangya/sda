<div align="center">
    <img src="/public/img/logo.jpg">
</div>

## Steps to setup up on local
  
1. `git clone -b master https://github.com/mangya/sda.git`

2. `composer install`

3. `cp .env.example .env`

4. `php artisan key:generate`

5. Create a database and set database credentials in '.env' file

6. `composer dumpautoload -o`

7. `php artisan migrate:refresh --seed`

8. `php artisan storage:link`
  
  
## Permissions
  
```
sudo chown -R :www-data bootstrap/cache
sudo chmod -R ug+rwx bootstrap/cache
sudo chown -R :www-data storage/framework
sudo chmod -R ug+rwx storage/framework
sudo chown -R :www-data storage/logs
sudo chmod -R ug+rwx storage/logs
```

  
Now, you've completed the configuration step :v:

11. Serve it on your local server, `php artisan serve --port=8081`
  
12. Hit the URL: http://localhost:8081  
  
## Login Credentials:
  
Administrator

**Login URL**: http://localhost:8081/admin  
**Login ID**: mangesh  
**Password**: vsmsda@111