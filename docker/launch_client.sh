#!/bin/bash

docker container run -it --rm \
	-v ${PWD}/../www:/var/www \
	-p 80:80 -p 8080:8080 \
	manmt_client 
