#!/usr/bin/python
from support import linearGradientWrapper
import sys

lgw = linearGradientWrapper.linearGradientWrapper()

if __name__ == '__main__':
    colors = sys.argv[1:]
    color_seg = []

    for i in range(0,60):
        lgw.addHEX('p'+colors[i:i+6])
        color_seg.append('p'+colors[i:i+6])
        i=i+6

    lgw.led_output(color_seg)
