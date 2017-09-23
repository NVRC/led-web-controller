#!/usr/bin/python

if __name__ == '__main__':
    import sys
    print(sys.argv[1:])
    f = open('sharedmem.txt','w+')
    f.write("VALUE: "sys.argv[1:])
    f.close()
