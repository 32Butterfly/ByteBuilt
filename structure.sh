#!/bin/bash

# Sukuriami pagrindiniai katalogai
mkdir -p app/Models app/Http/Controllers
mkdir -p bootstrap
mkdir -p config
mkdir -p public
mkdir -p resources/views
mkdir -p routes
mkdir -p storage/app storage/framework storage/logs
mkdir -p tests
mkdir -p vendor

# Sukuriami failai
touch .env composer.json
