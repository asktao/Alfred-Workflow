#!/usr/bin/env python
#coding:utf-8
__author__ = 'asktao'

#    time.py 
#    Author asktao  
#    Title  alfred-workflow 编码转换

import sys
import json
 
iconUrl = 'icon.png'

query = sys.argv[1]
output = {
    "items":[
        {
            "arg": query.encode('utf-8').decode('unicode_escape'),
            "title": query.encode('utf-8').decode('unicode_escape'),
            "subtitle": 'unicode', 
            "icon": {
                "path": iconUrl,
            }, 
            "valid": True, 
        }
    ] 
}
print(json.dumps(output))
