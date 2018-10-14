#!/bin/sh

docker run -d -ti -p 8080:80 --rm -v "$PWD":/usr/src/myapp -w /usr/src/myapp darts-scoreboard-backend-api php -S 0.0.0.0 -t public