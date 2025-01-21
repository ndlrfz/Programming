# Create variable with the name of your game
# Create bank words `words.txt`, every word must 5 letter
# Create list from the `words.txt`
#   Solution: use `open` function to open the file, use read() to read the file, and the use splitlines() to remove the `\n` traling in the end


import random


game_name = "Hakase Word Game"
database_words = "words.txt"

words_bank = open(database_words).read().splitlines()
word_choice = random.choice(words_bank)

misplaced_word = []
incorrect_word = []
max_try = 7
current_try = 0

print(f"Welcome to the {game_name}")
print(f"You can max guess word {max_try} times")
print(f"Your current try is: {current_try}")

while current_try < max_try:
    # user input to get words and convert to lowercase
    user_guess = input("What is your guess word? ").lower()

    # check if user input 5 letter and all of these alphabetics
    if len(user_guess) != len(word_choice) or not user_guess.isalpha():
        print("You must enter 5 letters")
        continue

    # logic app
    index = 0
    for w in user_guess:
        if w == word_choice[index]:
            print(w, end=" ")
            if w in misplaced_word:
                misplaced_word.remove(w)
        elif w in word_choice:
            if w not in misplaced_word:
                misplaced_word.append(w)
            print("_", end=" ")
        else:
            if w not in incorrect_word:
                incorrect_word.append(w)
            print("_", end=" ")
        index += 1

    print("\n")
    print(f"misplaced word {misplaced_word}")
    print(f"incorrect word {incorrect_word}")

    # print(type(word_choice))
    # print(word_choice)

    # add +1 to each loop until reach the `max_try` to exit
    current_try += 1

    # if user correct guess, print won and exit
    if user_guess == word_choice:
        print(f"You have won by guessing: {word_choice}")
        break

    # show user how much time left
    left_try = max_try - current_try
    print(f"You have tried {current_try} times and left {left_try} times")

    # to exit program after reached the max_try
    if current_try == max_try:
        print("You have reached the end")
        break


# with open(database_words) as words_bank:
#     ID = 1
#     for word in words_bank:
#         print(ID, word)
#         ID += 1
