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

ABOUT_ME = '<p>I am a second-year PhD student in the Computer Science Department at Princeton University working with <a href=\"http://www.cs.princeton.edu/~mfreed\">Mike Freedman</a> and <a href=\"http://www.cs.princeton.edu/~felten\">Ed Felten</a>. In my research, I seek to build systems that provide strong security while operating in untrusted environments. <p> Previously, I recevied my M.S.E. in Computer Science from Princeton in June 2014, and was co-advised by Ed Felten and Mike Freedman. My Master\'s thesis was on <a href=\"http://coniks.org\">CONIKS</a>, a practical key management system for end users, which is run by untrusted key servers. <p> I received my B.S. in Computer Science, with a Minor in Physics from <a href=\"http://www.hws.edu\">Hobart and William Smith Colleges</a> (HWS) in Geneva, NY in May 2012. '

AVATAR = 'static/images/marci.jpg'

# Uncomment following line if you want document-relative URLs when developing
#RELATIVE_URLS = True
