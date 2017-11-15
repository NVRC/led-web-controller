#!/usr/bin/python
from support import linearGradientWrapper
import sys



if __name__ == '__main__':
    colors = sys.argv[1:]
    color_seg = []
    for i in range(0,60):
        color_seg.append(colors[i:i+6])
        i=i+6
    print('COLOR SEG')
    print(color_seg)


    lgw = linearGradientWrapper.linearGradientWrapper()
    lgw.addArray(colors)
    lgw.display()
