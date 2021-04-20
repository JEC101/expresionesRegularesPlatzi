import re

pattern = re.compile(r'^([\d]{4,4})\-\d\d\-\d\d,(.*),Friendly,.*$')

f = open("./results_6aeb6252-c531-449d-bf29-e11193358b8c.csv", "r")

for line in f:
    res = re.match(pattern, line)
    if res:
        print("%s\n" % res.group(2))
    

f.close()
