# NG Banks Swift RESTful API
##### Description: NG Bank Swift API is a an API endpoint created for Swift Codes of all Banks in Nigeria
It's not hosted yet but you can test run it on your localhost....

## To Bootstrap...
git clone https://github.com/propenster/NgBankSwiftApi.git bank-api-app

cd bank-api-app

## Install Dependencies
composer install

## Configure DB in the .env
Configure DB from json dump in the resource folder of this repo

## Run migrations
php artisan migrate

## Import Db / Banks in the JSon Resource Folder...
php artisan db:seed 

## Run server
php artisan serve...

## Api consumation..
Endpoints

### List all Banks with links and metas
GET - http://127.0.0.1:8000/api/banks

### Get Single bank record...
GET - http://127.0.0.1:8000/api/banks/{id}

### Create a New Bank record.
POST - http://127.0.0.1:8000/api/banks
@params - 'bank', 'city', 'branch', 'swift_code', 'sort_code'

### Update a Bank Record
PUT - http://127.0.0.1:8000/api/banks{id}
@params - 'bank_id', 'bank', 'city', 'branch', 'swift_code', 'sort_code' 

### Delete a bank record
DELETE - http://127.0.0.1:8000/api/banks/{id}
