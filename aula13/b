#! /usr/bin/env bash

docker run --rm -i \
    -v $PWD:/app \
    -u $(id -u):$(id -g) \
    -p 80:80 \
    composer:2.4.2 "$@"