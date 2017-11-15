#!/usr/bin/python
from support import linearGradientWrapper
import sys



if __name__ == '__main__':
    colors = sys.argv[1:]
    color_seg = [None]*max(colors)
    k=0;
    for i in range(0,60):
        color_seg[k]=colors[i:i+6]
        i=i+6
        k+=1


    lgw = linearGradientWrapper.linearGradientWrapper()
    lgw.addArray(color_seg)
    lgw.display()
