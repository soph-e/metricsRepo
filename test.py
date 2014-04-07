# coding: utf8

import random,os,urllib,time,gzip
import numpy as np
from PIL import Image, ImageDraw  # @UnresolvedImport
from Pycluster import kcluster

#Pycluster is from here http://bonsai.hgc.jp/~mdehoon/software/cluster/software.htm
#Doc for treecluster is on page 38 of http://bonsai.hgc.jp/~mdehoon/software/cluster/cluster.pdf

#metrics_wanted definition only
metrics_definition = ["number of patches","patch density","largest patch index","total edge","edge density",
"landscape shape index","mean patch size","mean patch shape index","fractal dimension index",
"standard deviation of fractal area dimension","mean perimeter-area ratio","mean contiguity","total core area",
"mean core","area-weighted mean core","contagion index","percentage of like adjacencies",
"interspersion and juxtaposition index","effective mesh size","patch richness","shannon\'s evenness index"]

#landscapeArray
class_wanted = ["Open_water","Developed_low","Developed_medium","Developed_high","Deciduous_forest","Evergreen_forest",
"Mixed_forest","Shrub","Grassland","Pasture_hay","Cultivated_crops","Wetlands_woody","Wetlands_emergent_herbaceous"]



print metrics_definition
print class_wanted