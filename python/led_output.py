#!/usr/bin/env
from support import linearGradientWrapper
import sys



if __name__ == '__main__':
    colors = sys.argv[1:]
    
    for(i = 0; i < 60; i++)
        color_seg.append(colors[i:i+6])
    print(color_seg)


    lgw = linearGradientWrapper()
    lgw.addArray(colors)
    lgw.display()
