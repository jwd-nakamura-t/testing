#!/bin/sh

set -ex

sudo chmod 777 ./deploy/dep
./deploy/dep deploy production
