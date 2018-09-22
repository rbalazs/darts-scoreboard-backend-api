#!/bin/sh

docker run -d -ti -p 80:8080 --rm -v "$PWD":/usr/src/myapp -w /usr/src/myapp darts-scoreboard-backend-api php -S 0.0.0.0:8080 -t public