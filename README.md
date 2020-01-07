
#  prateik\Core-php

  

[![Author](https://img.shields.io/badge/author-@prateik-blue.svg?style=rounded-square)](https://www.linkedin.com/in/prateikdarji) [![Build Status](https://img.shields.io/travis/prateik2710/Core-php/master.svg?style=rounded-square)](https://travis-ci.org/prateik2710/core-php) [![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE) [![Packagist Version](https://img.shields.io/packagist/v/prateik/core-php.svg?style=rounded-square)](https://packagist.org/packages/league/flysystem) [![Total Downloads](https://img.shields.io/packagist/dt/prateik/core-php.svg?style=rounded-square)](https://packagist.org/packages/league/flysystem)

same as laravel all the configuration you can use `.env` file for storing all configurations.

Also this package contains enable log and get all error logs in your root directory of project's log directory.
Log will only be generated when `APP_DEBUG=true` has been set in .env file

Database connection will be generated once you set the details in .env
`DB_HOST=localhost`
`DB_DATABASE=<databasename>`
`DB_USERNAME=<username>`
`DB_PASSWORD=<databasepassword>`

this variables can be accessed by `getenv(<variablename>)`.

After defining parameters, a default pdo connection will been generated.

Create a new class with extending `Connection` class allows you to use pdo object using

`$yourClassName->pdo`
