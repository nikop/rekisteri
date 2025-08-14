# Installing

## Dependencies

Install depenecies by running following commands

> composer install  
> npm install  

## Setup

> cp .env.example .env
> php artisan key:generate

Additionally .env can change database settings, defaults to SQLite database.

## Create Database

> php artisan migrate

## Generate Test Data

Random example data can be generated with following command

> php artisan db:seed 

# Start Dev Environment

> composer run dev

# Api Endpoints

## List/Search Persons

GET /api/persons

Parameters supported

| Name               | Description                |
| ------------------ | -------------------------- |
| start              | Start offset for paging    |
| count              | How many entries to return |
| filter[first_name] | Search by first name       |
| filter[last_name]  | Search by last name        |

Example response:

```
{
  "total": 1,
  "items": [
    {
      "id": 1,
      "first_name": "Anu",
      "last_name": "Laakkonen",
      "created_at": "2025-08-11T09:00:00.000000Z",
      "updated_at": "2025-08-11T09:00:00.000000Z"
    }
  ]
}
```

## Get Person

GET /api/persons/{id}

Example response:

```
{
  "id": 1,
  "first_name": "Anu",
  "last_name": "Laakkonen",
  "phone": "+358 6 2429613",
  "email": "lehtonen.lila@example.org",
  "address": "Viljokaarto 75 039",
  "postcode": "08625",
  "city": "Hepomäkiharju",
  "country": "Suomi",
  "note": null,
  "created_at": "2025-08-11T09:00:00.000000Z",
  "updated_at": "2025-08-11T09:00:00.000000Z"
}
```

## Update Person

PATCH /api/persons/{id}

Accepts json with updated fields

```
{
  "first_name": "Anu",
  "last_name": "Laakkonen",
  "phone": "+358 6 2429613",
  "email": "lehtonen.lila@example.org",
  "address": "Viljokaarto 75 039",
  "postcode": "08625",
  "city": "Hepomäkiharju",
  "country": "Suomi",
  "note": null,
}
```

## Add Person

POST /api/persons

Accepts json with fields, at least first & last name are required.

```
{
  "first_name": "Anu",
  "last_name": "Laakkonen"
}
```

Response on Success includes id

```
{
  "id": 1
}
```