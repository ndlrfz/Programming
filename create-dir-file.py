import os
import csv


def read_csv(name, mode):
    with open(name, mode) as file:
        read = csv.reader(file)
        for i in read:
            print(i)


# Open and read csv file test.csv
read_csv("test.csv", "r")

# create new directory and file, then import data

os.mkdir("data")
os.chdir("data")

with open("dota2.csv", "w", newline="") as file:
    write = csv.writer(file)
    write.writerow(("Team", "Captain", "Last Match"))
    write.writerow(("GG", "Seleri", "25 Oct 2024"))
    write.writerow(("Thundra", "33", "25 Oct 2024"))
    write.writerow(("Aurora", "Jabz", "25 Oct 2024"))

read_csv("dota2.csv", "r")
