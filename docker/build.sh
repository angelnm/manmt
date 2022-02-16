#!/bin/bash

docker build -f Dockerfile.server --tag manmt_server .
docker build -f Dockerfile.client --tag manmt_client .
