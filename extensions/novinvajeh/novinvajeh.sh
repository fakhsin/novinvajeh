#!/usr/bin/env bash

# Clone Variables extension
git clone --depth=1 https://gerrit.wikimedia.org/r/mediawiki/extensions/Variables /var/www/html/extensions/Variables
git clone --depth=1 --branch REL1_39 https://gerrit.wikimedia.org/r/mediawiki/extensions/Linter /var/www/html/extensions/Linter
git clone --depth=1 --branch REL1_39 https://gerrit.wikimedia.org/r/mediawiki/extensions/TimedMediaHandler /var/www/html/extensions/TimedMediaHandler
