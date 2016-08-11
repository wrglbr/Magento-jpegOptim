# Magento Product Image Optimization with jpegOptim

A fairly simple Magento extension that utilizes jpegOptim to optimize product images on product save.

## Features

### Runs silently as an Observer

No configuration required, so long as the web server user has permission to write to the /media directory.

### The future

I'll probably add more image types to optimize and maybe integrate PHPImageOptim for easier use.

This extension is made available for free!

## Installation/Requirements

### Install jpegoptim on Debian based OS

sudo apt-get install jpegoptim

### Install jpegoptim on Red Hat based OS

Install the correct EPEL repo for your distro/version, for example:

rpm -ivh http://dl.fedoraproject.org/pub/epel/6Server/x86_64/epel-release-6-8.noarch.rpm

Then use yum to install jpegoptim:

yum install jpegoptim

### Build jpegoptim from source

Pretty easy to build:

jpegoptim-1.4.3.tar.gz | tar xf -
cd jpegoptim-1.4.3
./configure
make
make strip
make install



Then just clone this repo and copy the files into the correct directories. I'll eventually add composer and/or modman to this.


