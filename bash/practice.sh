#!/usr/bin/bash
# find this shebang with `which bash`

# capture user input via `echo -e` and assign to variable `wpath`
# with `read`
echo -e "\nEnter your new path working directory:: "
read wpath

# access the `wpath` variable with dollar sign `$wpath`
echo -e "Your working path is:: "
echo $wpath

echo -e "Your list files and dirs is:: "
ls $wpath

# create variable
# WRONG: os = EndeavourOS
# DO THIS: os=EndeavourOS
os=EndeavourOS
echo -e $os

# create variable based on variable or output
# For output, you can assign output to a variable
current_os=$os
echo -e $current_os

# read file in bash (just like `cat`)
# while read is true, this store stdin to the variable `line`
# loop will be false at the end of line
# IMPORTANT LOOP CONDITION
while read line
do
    # do print $line
    echo $line
# mark done when finished or read = false
# < ytdl - tak the stdin from file `ytdl`
# IMPORTANT to mark as fisnished and load the stdin from file
done < ytdl
