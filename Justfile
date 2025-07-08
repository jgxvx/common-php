composer-install:
    podman run -v $(pwd):/app:Z docker.io/composer:2.2 install

composer-update:
    podman run -v $(pwd):/app:Z docker.io/composer:2.2 update

test:
    podman run -v $(pwd):/app:Z docker.io/composer:2.2 vendor/bin/phpunit
