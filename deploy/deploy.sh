#!/bin/sh

set -ex

sudo chmod 777 ./dep
ssh-add $HOME/.ssh/id_circleci_github
./dep deploy develop
