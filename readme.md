# Url Shortner Laravel

> A pretty straight forward and easy setup.

## Build Setup

``` bash
# pull down the code into your valet sites directory
$ git clone git@github.com:KaniRobinson/urlshortner-api.git api.urlshortner && cd api.urlshortner/

# Copy dotenv
$ cp .env.example .env && nano .env

# install dependencies
$ composer install

# generate applcation key
$ php artisan key:generate

# run the migrations
$ php artisan migrate

# you should be ready to just access localhost:3000 and start playing. if you want to try out a quick test
$ composer test
```
