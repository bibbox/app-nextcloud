#!/usr/bin/env bash
mkdir -p data/mysql
mkdir -p data/html
chmod -R 777 data
docker-compose up -d
