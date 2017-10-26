#!/bin/bash

docker network create donors
docker volume create --name=donors-data

cp docker-compose.yml.dist docker-compose.yml
(cd dockerfiles && docker build .)

docker-compose up -d
