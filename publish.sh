#! /bin/bash
## file: publish.sh

# install tools
sudo apt-get install -y git make wget python3 python3-pip

# install dependencies
sudo pip3 install --upgrade pip
sudo pip3 install --upgrade pelican[markdown]
sudo pip3 install --upgrade ghp-import
sudo pip3 install --upgrade Jinja2

git submodule update --init

mkdir -p output
make html
