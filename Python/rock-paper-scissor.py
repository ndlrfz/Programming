# ============= Rock Paper Scissors one time game =============================
# import random

# user_action = input("Enter your choice - rock, paper, scissors: ")

# user_choice = ['rock', 'paper', 'scissors']
# computer_choice = random.choice(user_choice)

# print(f'You choose {user_action}, while computer choose {computer_choice}')

# if user_action == computer_choice:
#     print(f'Tie - You chose {user_action} and Computer choose {computer_choice}')
# elif user_action == 'rock':
#     if computer_choice == 'scissors':
#         print('You Win - Rock smash Scissors!')
#     else:
#         print('You Lose - Paper covers Rock!')
# elif user_action == 'paper':
#     if computer_choice == 'rock':
#         print('You Win - Paper covers Rock!')
#     else:
#         print('You Lose - Scissors cuts Paper!')
# elif user_action == 'scissors':
#     if computer_choice == 'rock':
#         print('You Lose - Rock smash Scissors!')
#     else:
#         print('You Win - Scissors cut Paper!')


#====================== ROCK PAPER SCISSORS MANY TIMES wusing `while` =============================
# import random

# while True:

#     user_action = input("Enter your choice - rock, paper, scissors: ")

#     user_choice = ['rock', 'paper', 'scissors']
#     computer_choice = random.choice(user_choice)

#     print(f'You choose {user_action}, while computer choose {computer_choice}')

#     if user_action == computer_choice:
#         print(f'Tie - You chose {user_action} and Computer choose {computer_choice}')
#     elif user_action == 'rock':
#         if computer_choice == 'scissors':
#             print('You Win - Rock smash Scissors!')
#         else:
#             print('You Lose - Paper covers Rock!')
#     elif user_action == 'paper':
#         if computer_choice == 'rock':
#             print('You Win - Paper covers Rock!')
#         else:
#             print('You Lose - Scissors cuts Paper!')
#     elif user_action == 'scissors':
#         if computer_choice == 'rock':
#             print('You Lose - Rock smash Scissors!')
#         else:
#             print('You Win - Scissors cut Paper!')

#     play_again = input('Do you want to play again - y/n: ')
#     if play_again.lower() != 'y':
#         break

import random
from enum import IntEnum

class Choice(IntEnum):
    Rock = 0
    Paper = 1
    Scissors = 2

print(Choice.Paper)


def get_user_choice():
    """user input for choice"""
    user_choice = input('Enter your choice - [0] Rock [1] Paper [2] Scissors: ')
    selection = int(user_choice)
    type(selection)
    action = Choice(selection)
    return action


# def get_user_choice():
#     """user input for choice in list comprehension"""
#     choices = [f'{action.name}[{action.value}]' for action in Choice]
#     choices_str = ", ".join(choices)
#     selection = int(input(f'Enter your choice ({choice_str})'))
#     action = Choice(selection)
#     return action


def computer_choice():
    """choice for computer with random.randint() function"""
    computer_random_select = random.randint(0, len(Choice) - 1)
    computer_action = Choice(computer_random_select)
    return computer_action


def winner_logic(user_select, computer_select):
    """Logic that determine win or lose - use two if elif if else"""
    if user_select == computer_select:
        print(f'The game is Tie! You choose {user_select.name} and Computer choose {computer_select.name}')
    elif user_select == Choice.Rock:
        if computer_select == Choice.Scissors:
            print(f'You Win! The {user_select} cuts Scissors.')
        else:
            print(f'You Lose! Paper covers Rock.')
    elif user_select == Choice.Paper:
        if computer_select == Choice.Rock:
            print(f'You Win! The {user_select.name} covers Rock.')
        else:
            print(f'You Lose! Scissors cuts Paper')
    elif user_select == Choice.Scissors:
        if computer_select == Choice.Rock:
            print(f'You Lose! The Rock smash the {user_select.name}')
        else:
            print(f'You Win! The {user_select.name} cuts Paper.')

while True:
    try:
        user_choice_menu = get_user_choice()
    except ValueError as e:
        range_str = f'[0, {len(Choice) - 1}]'
        print(f'Invalid selection. Please choose in range {range_str}')
        continue

    computer_choice_menu = computer_choice()
    winner_logic(user_choice_menu, computer_choice_menu)

    play_again = input('Do you want to play again y/n? ')
    if play_again.lower() != 'y':
        break
