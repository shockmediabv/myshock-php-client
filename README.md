# My Shock Media PHP API Client (BETA)

Welcome to the **My Shock Media PHP API Client**! This project provides a PHP client library for interacting with the My
Shock Media API. It's generated from the OpenRPC specification and allows you to perform requests on behalf of users to
manage domains, retrieve server information, and more.

**Note:** This project is currently in BETA. We do not guarantee compatibility with future versions, and breaking
changes may occur.

## Installation

To install this library, it is recommended to use [Composer](https://getcomposer.org/). You can include the package
in your `composer.json` file as follows:

```json
{
  "require": {
    "shockmediabv/myshock-php-client": "~25.5.1"
  }
}
```

Then, run the following command to install the package:

```bash
composer install
```

Alternatively, you can install the package directly using the command:

```bash
composer require shockmediabv/myshock-php-client
```

## Basic usage

Here's a simple example to get you started with using the My Shock Media PHP API Client:

```php
<?php

include '../vendor/autoload.php';

use ShockMedia\Generated\Domain\DomainClient;
use ShockMedia\Generated\Domains\DomainFilter;
use ShockMedia\Generated\PageRequest;
use ShockMedia\Generated\SimpleHttpClient;
use ShockMedia\Generated\SortField;
use ShockMedia\Generated\SortField\DirectionAlt2;

// The API location and credentials
$url = 'https://my.shockmedia.nl/openrpc/';
$authorizationHeader = 'ApiKey <your api key here>';

// The HTTP client to use. Can be swapped out for a custom implementation, for example using cURL.
$client = new SimpleHttpClient($url, $authorizationHeader);

// Create a client for interacting with the Domain endpoint
$domainClient = new DomainClient($client);

// Example call: list the first 10 domains of a user, sorted by name, without any filters.
$result = $domainClient->listDomains(
    new PageRequest([new SortField('name', DirectionAlt2::ASC)], 0, 10), 
    new DomainFilter(null)
 );

// Output the example result
var_dump($result);
```

### Explanation

1. HTTP Client Setup:
    * We start by creating a SimpleHttpClient, which is the core client used for sending requests to the API. This
      client requires two parameters:
        * API URL: The base URL of the My Shock Media API.
        * Authorization Header: The Authorization header string, which typically includes the authentication scheme and
          the API key or credentials.
    * Optionally, you can supply your own HTTP Client implementation, for example if you want to use cURL for HTTP
      requests.
2. Domain Client:
    * We then create a DomainClient, which allows us to interact with the domain management API endpoints.
    * The client library provides `***Client` objects for all API endpoints.
3. Example call:
    * In this example, we use the `listDomains` method to retrieve the first 10 domains owned by the user, sorted by
      name in ascending order.

## Authentication

The API supports API key authentication using the **ApiKey** scheme.
API keys can be limited in scope and IP-restricted.

### Creating API keys

To create an API key:

1. Log in to your [My Shock Media](https://my.shockmedia.nl) account.
2. Navigate to [API Tokens](https://my.shockmedia.nl/api/tokens) and click on 'Create new token' under 'API tokens'.
    * Alternatively, navigate to [Create new token](https://my.shockmedia.nl/api/tokens/new) directly.
3. Fill in the form to choose a name, expiry date and permissions for the token.
4. Click on 'Create new token' to submit the form. Make sure to save the created token, because it is only shown once.

## Documentation

Comprehensive documentation for the My Shock Media API and the PHP client library is available on the
[API Documentation](https://my.shockmedia.nl/api/documentation) page within your My Shock Media account (login
required).

## License

This project is licensed under the Apache-2.0 License. See the [LICENSE](./LICENSE) file for details.

## Support

If you encounter any issues or have questions, feel free to open a support ticket
in [My Shock Media](https://my.shockmedia.nl) or contact us via email at support@shockmedia.nl.
