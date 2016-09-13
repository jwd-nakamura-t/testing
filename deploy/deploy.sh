#!/bin/sh

set -ex

sudo chmod 777 ./deploy/dep
ssh-add $HOME/.ssh/id_circleci_github
./deploy/dep deploy production
