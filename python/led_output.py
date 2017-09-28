#!/usr/bin/env
import imp
import sys
if __name__ == '__main__':
    colors = sys.argv[1:]

src = imp.load_source('linearGradientWrapper', '/home/pi/Adafruit_DotStar_Pi/linearGradientWrapper.py')

lgw = src.linearGradientWrapper();
lgw.addArray(colors)
lgw.display()
