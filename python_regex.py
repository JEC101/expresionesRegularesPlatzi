import re

pattern = re.compile(r'^([\d]{4,4})\-\d\d\-\d\d,(.+),(.+),(\d+),(\d+),.*$')

f = open("./results_6aeb6252-c531-449d-bf29-e11193358b8c.csv", "r")

for line in f:
    res = re.match(pattern, line)
    if res:
        total = int(res.group(4)) + int(res.group(5))
        if total > 10:
            print(f"goles: {total}, en {res.group(1)}, entre {res.group(2)} {res.group(4)}-{res.group(5)} {res.group(3)}")
    

f.close()
