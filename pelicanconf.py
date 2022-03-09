#!/usr/bin/env python
# -*- coding: utf-8 -*- #
from __future__ import unicode_literals

AUTHOR = 'Marcela Melara'
SITENAME = 'Marcela Melara, Research Scientist, Intel Labs'
SITEURL = 'https://masomel.github.io'

PATH = 'content'

TIMEZONE = 'US/Pacific'

DEFAULT_LANG = 'en'

# Feed generation is usually not desired when developing
FEED_ALL_ATOM = None
CATEGORY_FEED_ATOM = None
TRANSLATION_FEED_ATOM = None
AUTHOR_FEED_ATOM = None
AUTHOR_FEED_RSS = None

PAGES_SORT_ATTRIBUTE = 'page-order'

THEME = 'style/pelican-themes/pelican-bootstrap3'
BOOTSTRAP_THEME = 'cerulean'
CUSTOM_CSS = 'static/my.css'

# Needed for pelican-bootstrap3 theme to build
PLUGIN_PATHS = ['/Users/marcelamelara/pelican-plugins', ]
PLUGINS = ['i18n_subsites', ]
JINJA_ENVIRONMENT = {
    'extensions': ['jinja2.ext.i18n'],
}

# Blogroll
#LINKS = (('CONIKS Project', 'https://coniks.org'),)

# Social widget
SOCIAL = (('twitter', 'https://twitter.com/mas0mel'),('github', 'https://github.com/marcelamelara'),)

DISPLAY_PAGES_ON_MENU = True
DEFAULT_PAGINATION = False

pages = ['index.md', 'personal.md', 'prior-projects.md', 'projects.md', 'publications.md']

# Tell Pelican to add 'style.css' to the output dir
STATIC_PATHS = ['static/images', 'static/pubs', 'static/my.css', 'static/cv.pdf']

SIDEBAR_IMAGES = ['static/images/marcela.jpg']
DISABLE_SIDEBAR_TITLE_ICONS = True

# Uncomment following line if you want document-relative URLs when developing
#RELATIVE_URLS = True
