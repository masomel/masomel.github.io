#! /bin/bash
## file: publish.sh

# install tools
sudo apt-get install -y git make wget python3 python3-pip

# install dependencies
sudo pip3 install --upgrade pip
sudo pip3 install --upgrade pelican[markdown]
sudo pip3 install --upgrade ghp-import
sudo pip3 install --upgrade Jinja2

wget https://github.com/masomel/pelican-themes/archive/refs/heads/main.zip -P /tmp
unzip /tmp/main.zip

# publish to github pages
#ghp-import -m "Generate Pelican site" -b gh-pages output

make html

