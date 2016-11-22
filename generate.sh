#!/usr/bin/env bash
rm -r swagger.json docs lib test
wget --no-check-certificate https://api.swappy.com/swagger.json && \
java -jar swagger-codegen-cli.jar generate -l php -i ./swagger.json --instantiation-types array=array  -c ./codegen-config.json -o ./
mv SwaggerClient-php/* ./
mv SwaggerClient-php/.travis.yml ./
rmdir SwaggerClient-php
git add .