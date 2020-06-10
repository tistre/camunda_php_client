# A PHP client for the Camunda BPMN workflow engine

This is an inofficial PHP client for the [Camunda BPMN workflow engine](https://camunda.com/products/bpmn-engine/)
using its [REST API](https://docs.camunda.org/manual/latest/reference/rest/).

Do not use in production yet, this is currently an experimental, rudimentary implementation.

## Quick test 

Here’s how to do a quick test, starting from scratch with a new project (Docker and Camunda server required):

### Install dependencies using Composer

```
$ docker run --rm --interactive --tty \
  --volume $PWD:/app \
  --volume ${COMPOSER_HOME:-$HOME/.composer}:/tmp \
  composer require strehle-de/camunda-client monolog/monolog
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
