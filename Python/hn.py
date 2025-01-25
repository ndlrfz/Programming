# ask hn app
#

import csv

file = "hacker_news.csv"

with open(file, 'r') as csvdata:
    csvobject = csv.reader(csvdata)
    header = next(csvobject)
    print(header)

    for row in csvobject:
        print(row[1])

hn = open(file).read().splitlines()

header = hn[0]
del hn[0]

ask_posts = []
show_posts = []
other_posts = []

print(type(hn))
print(hn[0:5])

print(header)

# for post in hn:
#     print(post[0])
