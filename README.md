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

New terminal window

```
docker-compose run --rm composer install
docker-compose run --rm artisan migrate
```

## API

The API contains the following endpoints:

- api/login
- api/register
- api/dashboard (Protected)
- api/logout

A Postman collection file can be found in the root of this repo called `Joii API Test - N.Peters.postman_collection.json`

Within Postman run the Register request first to create your initial user.

Once the register request has been run, you will be able to test the remaining endpoints.

## Notes

For simplicity the .env is committed to this repo. In live projects this would not be committed.