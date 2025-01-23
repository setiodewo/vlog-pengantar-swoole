#!/bin/sh
sudo docker run --rm \
     --name swoole \
     -p 8080:8080 \
     -v /home/ubuntu/swoole/app:/var/www \
     -w /var/www \
     phpswoole/swoole \
     php index.php
