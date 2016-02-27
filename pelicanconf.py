#!/usr/bin/env python
# -*- coding: utf-8 -*- #
from __future__ import unicode_literals

AUTHOR = 'Marcela Melara'
SITENAME = 'Marcela Melara, PhD Student, CS Dept, Princeton University'
SITEURL = 'https://www.cs.princeton.edu/~melara'

PATH = 'content'

TIMEZONE = 'America/New_York'

DEFAULT_LANG = 'en'

# Feed generation is usually not desired when developing
FEED_ALL_ATOM = None
CATEGORY_FEED_ATOM = None
TRANSLATION_FEED_ATOM = None
AUTHOR_FEED_ATOM = None
AUTHOR_FEED_RSS = None

# Blogroll
LINKS = (('CONIKS Project', 'http://coniks.org'),)

# Social widget
SOCIAL = (('twitter.com', 'https://twitter.com/mas0mel'),
          ('github.com', 'https://github.com/masomel'),)

DISPLAY_PAGES_ON_MENU = True
DEFAULT_PAGINATION = False

THEME = '/home/marcela/pelican-bootstrap3'
#CUSTOM_CSS = 'static/style.css'

# Tell Pelican to add 'style.css' to the output dir
STATIC_PATHS = ['static/images']

# Tell Pelican to change the path to 'static/custom.css' in the output dir
#EXTRA_PATH_METADATA = {
  #  'static/style.css': {'path': 'static/style.css'}
#}

AVATAR = 'static/images/marci.jpg'

# Uncomment following line if you want document-relative URLs when developing
#RELATIVE_URLS = True
