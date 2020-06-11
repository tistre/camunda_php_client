# A PHP client for the Camunda BPMN workflow engine

This is an inofficial PHP client for the [Camunda BPMN workflow engine](https://camunda.com/products/bpmn-engine/)
using its [REST API](https://docs.camunda.org/manual/latest/reference/rest/).

## Status right now: Developers only, not suitable for production use

If you’re a developer looking for a Camunda client making use of PHP 7.4’s strong typing, you might be interested, 
and you’re welcome to contribute. 

Do not use this code in production yet – currently it’s an experimental, rudimentary implementation.

Make sure to also check out the nice [endpot / camunda-rest-client](https://github.com/endpot/camunda-rest-client)
and the official but dated [Camunda BPM PHP SDK](http://camunda.github.io/camunda-bpm-php-sdk/) (or its forks,
for example [kmhamdi00 / camunda-bpm-php-sdk](https://github.com/kmhamdi00/camunda-bpm-php-sdk)). 

## Quick test 

Here’s how to do a quick test, starting from scratch with a new project (Docker and Camunda server required):

### Install dependencies using Composer

```
$ docker run --rm --interactive --tty \
  --volume $PWD:/app \
  --volume ${COMPOSER_HOME:-$HOME/.composer}:/tmp \
  composer require strehle-de/camunda-client:dev-master monolog/monolog
```

### Copy and edit the example script

`$ cp vendor/strehle-de/camunda-client/UsageExample.php MyExample.php`

Edit your copy.

### Then run your copy

```
$ docker run -it --rm \
  --volume "$PWD":/usr/src/myapp --workdir /usr/src/myapp \
  php:7.4-cli php MyExample.php
```

## Authors

* [Tim Strehle](https://github.com/tistre) - https://twitter.com/tistre

## License

This library is licensed under the MIT License - see the `LICENSE` file for details.
