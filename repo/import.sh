#!/bin/bash
dpkg-scanpackages ./ /dev/null |gzip > Packages.gz;

dpkg-scanpackages ./ /dev/null | bzip2 > Packages.bz2;

dpkg-scanpackages ./ /dev/null > Packages;
