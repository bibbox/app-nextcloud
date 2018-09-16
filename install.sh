#!/usr/bin/env bash
mkdir -p data/mysql
mkdir -p data/data
mkdir -p data/apps
chmod -R 777 data
docker-compose up -d
