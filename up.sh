#!/usr/bin/env bash

find ./storage/logs ./storage/framework ./storage/app -type f -exec chmod 0666 {} \;
find ./storage/logs ./storage/framework ./storage/app -type d -exec chmod 0777 {} \;
