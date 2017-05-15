# Laravel Blog

This blog system implements a blog system base on Laravel framework.
Users can register and login when they first use the system.
Unauthenticated users can only view the posts.
However, anthenticated users can create posts, make comments, and use tags.

## Installation

- Clone this repository:
```bash
git clone https://github.com/frankbearzou/laravel-simple-blog.git
```

- Go to the project folder:
```bash
cd laravel-simple-blog
```

- Create a `blog` database:
```mysql
create database blog;
```

- Migrate database:
```bash
php artisan migrate
```

And then, you can run the program.