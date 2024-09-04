#! /bin/bash
## file: publish.sh

# install tools
sudo apt-get install -y git make wget python3 python3-pip

# install dependencies
pip3 install --upgrade pip
pip3 install --upgrade pelican[markdown]
pip3 install --upgrade ghp-import
pip3 install --upgrade Jinja2

git submodule update --init

mkdir -p output
make html
