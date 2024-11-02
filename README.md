<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>


## About Task Scheduling and Caching App

## Assignment: Implementing Task Scheduling and Caching in Laravel
### Objective: Build a Laravel app that handles periodic data cleaning and caching of a frequently accessed API.
#### Details:
- Set up a simple database that stores logs of API requests.
- Implement a scheduled task using Laravel’s task scheduler that deletes logs older than 30 days.
- Use Redis or Memcached to cache API responses from an external service (like weather or news APIs) for faster retrieval.
- Provide an endpoint to fetch the cached data, and ensure that the cache is invalidated every hour.
- Demonstrate the use of Laravel’s Artisan commands for managing these processes.


##  Artisan Commands used while working on the app
### Create Model and DB Migration File
- `php artisan make:model ApiLog -m`
### Migrate DB
- `php artisan migrate`
### Create Controller File
- `php artisan make:controller ApiController`
### Create Command Files
- `php artisan make:command ClearOldLogs`
- `php artisan make:command InvalidateCache`
### Run the scheduler locally
- `php artisan schedule:run`
### Use Artisan commands to manually clear logs and invalidate cache:
- `php artisan logs:clear-old`
- `php artisan cache:invalidate`
