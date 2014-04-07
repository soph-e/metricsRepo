#!/usr/bin/python
import argparse
__author__ = 'nixCraft'
 
parser = argparse.ArgumentParser(description='This is a demo script by nixCraft.')
parser.add_argument('-l','--post_class', help='Input file name',required=False)
parser.add_argument('-c','--output',help='Output file name', required=False)
args = parser.parse_args()
 
## show values ##
print ("Input file: %s" % args.input_class )
print ("Output file: %s" % args.output )