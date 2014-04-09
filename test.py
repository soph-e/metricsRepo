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

#print metrics_definition
#print class_wanted


def index():
    
    print "New session, time is :",time.asctime(time.localtime(time.time()))
    message=""
    form=""
    skip=False
    forget=False

    img1=0
    img2=1
    img3=2
    
    class Session:
        def __init__(self):
            self.load2 = True
            self.request=""
            self.debug=0
            self.list_img="123"
    session= Session()

    cluster_table=""
    table_class=""
    table_ld_metrics=""
    US_img=""
    US_ratio=""


    return dict(message=message,form=form,skip=skip,forget=forget,img1=session.list_img[img1],
            img2=session.list_img[img2],img3=session.list_img[img3],cluster_table=cluster_table,
            table1=table_class,table2=table_ld_metrics,landscapes1=0,landscapes2=0,debug=session.debug,US_img=US_img,US_ratio=US_ratio,wrong_dataset=False,minimum_tiles=True)



print index()