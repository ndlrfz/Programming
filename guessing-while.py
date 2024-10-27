secret_number = 30

while True:
    guess = int(input("Guess the secret number:: "))

    if guess == secret_number:
        print("You're Rock!")
        break
    else:
        print("Keep tring and dont give up!")
