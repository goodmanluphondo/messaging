# G-Messaging - by [Goodman Luphondo](https://github.com/goodmanluphondo)

G-Messaging is a simple messaging system that allows users to create, send, receive, view and delete message between themselves and other users

## How to install

```
git clone git@github.com:goodmanluphondo/messaging.git
cd message
cp .env.example .env
composer install
yarn
php artisan key:generate
php artisan migrate --seed
yarn watch
```

## WebSocket server
Run WebSocket server

```
php artisan websockets:serve
```

## What to avoid
Avoid committing the following files

```
.env
node_modules
vendor
public/css
public/js
public/mix-manifest.json
```
