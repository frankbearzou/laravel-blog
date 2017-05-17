# Laravel Blog

A blog system based on Laravel framework.

Users can register and login to the blog.

Unauthenticated users can only view posts.

Authenticated users can create posts, make comments and tags.

In the database schema, User table and Post table are one to many relationship.
Post and Comment table are one to many relationship.
Post and Tag table are many to many relationship.


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

And then, you can run the program in browsers.