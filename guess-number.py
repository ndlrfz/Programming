#!/usr/bin/env python3
"""
Guess the number with random module
1. Choose the random number between 1-100 with the random.randrange() function
2. Define max chanches for user to guess to `chances` variable / 7
3. The `guess_counter` variable weill be used to track N-th user to guess, which by default is 0 / "User can guess 1 - 7x"
4. Using `while` to loop for user to guess
5. As long the `guess_counter` is smaller than `chances`, the code will be executed
6. Define the new `guess_counter` in every loop. The new variable `guess_counter += 1` or `guess_counter = guess_counter + 1`
7. User guess wll be stored to `my_guess` variable and will be converted to `int` as Integer
8. If `my_guess` == `num` (the correct random number), the success message will be shown and the program exit with `break`
9. if the `guess_counter` is greater than (>) `chances` AND `my_guess` is not the same as `num` (the random number), error Sorry and timout will be shown
10. if `my_guess` is greater than `num`, the `too high` message will be shown
11. if `my_guess` is smaller than `num`, the `too low` message will be show
"""

import random

print("Welcome to the Guess Number Game")

num = random.randrange(100)
chances = 7
guess_counter = 0

while guess_counter < chances:
    guess_counter += 1
    my_guess = int(input("Please enter your guess between 1 - 100 :: "))

    if my_guess == num:
        print(f"Congrats! You've won by guessed the {num} in the {guess_counter}-th")
        break
    elif guess_counter >= chances and my_guess != num:
        print(f"Sorry, the number is {num}, you need to guess next time!")
    elif my_guess > num:
        print("Your guess is too high!")
    elif my_guess < num:
        print("Your guess is too low!")
