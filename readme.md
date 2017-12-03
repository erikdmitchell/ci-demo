I want this to be a sort of notes and process for future build and build out of projects.


Run `composer install`

Run php unit tests `phpunit`
Run code sniffer `composer check-style` and `composer fix-style` - these are custom scripts built into our `composer.json` file.

Code sniffer (on a dir) `phpcs src/`

Run WP coding standards `phpcs --standard=WordPress src/`

* Integrate travis