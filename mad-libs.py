# mad libs generator
# with def and oop
# dota2 game
# what is your name
# game you like? if dota2 then xxx, if csgo then xxx, learning then xxx
#
# dota2:
# what role you play?
# carry / offlane / support / additional
# learn this and then with this heroes
# additional: mental and positive
#


def games():
    print("""Select your favorite game?
            1) Dota2
            2) CSGO
            3) Learning
            4) other
          """)


def dota2():
    print("""
        What role you play?
        1) Carry
        2) Mid
        3) Offlane
        4) Support
          """)
    role = input("Enter your role in Dota2?")

    if role == "1":
        print("""For Carry role, you need to be good at cs-ing in the early game and try not die.
In the mid game, keep farming and only join fight when you've advantages.
Play at your item timing.
            """)
        print("""For heroes recommendation:
A. For Beginner: Juggernaut, Sven, Dragon Knight
B. For Intermediete: Faceless Void, Shadow Fiend, Phantom Assasin
C. For Old Players: Morphling, Medusa, Templar Assasin""")
    elif role == "3":
        print("""for Offlane role, you must balance between harrasing enemy and cs-ing.
        Mostly, you must have one item before joining team fight and keep playing at your item timing.
        Your job is to create space during mid-game without sacrificing your farm.
            """)
        print("""For heroes recommendation:
                A. For Beginner: Axe, Centaur War Runner, Dragon Knight
                B. For Intermediete: Faceless Void, Shadow Fiend, Phantom Assasin
                C. For Old Players: Morphling, Medusa, Templar Assasin
              """)
    else:
        print("Not your game")


def csgo():
    pass


def learn():
    pass


def other_game():
    pass


games()
user_game = input("Select [1, 2, 3, or 4] :: ")
if user_game == "1":
    dota2()
