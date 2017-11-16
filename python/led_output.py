#!/usr/bin/python
from support import linearGradientWrapper
import sys

lgw = linearGradientWrapper.linearGradientWrapper()

if __name__ == '__main__':
    colors = sys.argv[1:]
    color_seg = []

    for i in range(0,60):
        lgw.addHEX(colors[i:i+7])
        color_seg.append(colors[i:i+7])
        i=i+7

    lgw.led_output(color_seg)
