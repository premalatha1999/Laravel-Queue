## A simple example to implement Queue in laravel


### Steps to run

```
git clone https://github.com/premalatha1999/Laravel-Queue.git
cd Laravel-Queue
composer update
To run queue : php artisan queue:work
```

### Steps for implement queue

1 . php artisan make:job jobname
2 . write the code inside the handle() in the job class
3 . php artisan queue:table
4 . php artisan migrate
5 . php artisan queue:work
