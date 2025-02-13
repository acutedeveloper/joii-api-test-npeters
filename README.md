# N Peters Laravel API Test

This is running under Laravel 11.

The Docker setup is using separate containers for:

- NGINX
- MySQL
- Composer
- NPM
- Artisan

## Setup

```
docker-compose up --build nginx
```

## API

The API contains the following endpoints:

- api/login
- api/register
- api/dashboard
- api/logout

A Postman collection file can be found in the root of this repo called `Joii API Test - N.Peters.postman_collection.json`