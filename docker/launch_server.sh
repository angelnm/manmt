#!/bin/bash

command="python3 ./demo-web/sample_server.py \
	-v 2 \
	--logging-level 2 \
	--dataset /opt/europarl/model/Dataset_Europarl_esen.pkl \
	--port=6542 \
	--models /opt/europarl/model/update_232500"

docker container run -it --rm \
	-v ${PWD}/../dataset:/opt/europarl \
	--gpus all \
	-p 6542:6542 \
	manmt_server \
	${command}
