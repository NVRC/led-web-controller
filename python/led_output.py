#!/usr/bin/python

import sys
print(sys.argv[1:])
f = open('sharedmem.txt','w')
f.write(sys.argv[1:][0])
f.close()
