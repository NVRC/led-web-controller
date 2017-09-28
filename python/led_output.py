#!/usr/bin/env

import sys
if __name__ == '__main__':
    colors = sys.argv[1:]



sys.path.insert(0, 'home/pi/Adafruit_DotStar_Pi/')

import imp

src = imp.load_source('linearGradientWrapper.py', '/home/pi/Adafruit_DotStar_Pi/')

lgw = src.linearGradientWrapper();
lgw.addArray(colors)
lgw.display()
