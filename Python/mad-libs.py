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
3) Valorant
4) other
5) Exit
          """)


def dota2():
    print("""
        What role you play?
1) Carry
2) Mid
3) Offlane
4) Support
          """)
    role = input("Enter your role in Dota2:: ")

    if role == "1":
        print("""For Carry role, you need to be good at cs-ing in the early game and try not die.
In the mid game, keep farming and only join fight when you've advantages.
Play at your item timing.
            """)
        print("""For heroes recommendation:
A. For Beginner: Juggernaut, Sven, Dragon Knight
B. For Intermediete: Faceless Void, Shadow Fiend, Phantom Assasin
C. For Old Players: Morphling, Medusa, Templar Assasin""")
    elif role == "2":
        print("""For midlane, focus on your cs-ing to get more gold and xp.
Make sure to control runes in most time. If you get good rune, you can try ganking.
Keep playing on your timing and dont force.
        """)
        print("""Heroes recommendation for mid: Dragon Knight, Zeus, Necropos, and Lina.
Those maybe the easiest heroes for midlaner.
        """)
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
        print(
            "So you're support. Keep harrasing enemy, contest every cs, get more Tango, dont forget about wards and sentry."
        )


def csgo():
    print("I don't really know about CS:GO, so good luck in your journey!")


def valo():
    print("I dont know about the shooter game. my only game is Dota 2.")


def other_game():
    print("Enough bro!")


games()

while True:
    user_game = input("Select [1, 2, 3, or 4] :: ")
    if user_game == "1":
        dota2()
        games()
        continue
    elif user_game == "2":
        csgo()
        continue
    elif user_game == "3":
        valo()
        continue
    elif user_game == "4":
        other_game()
        continue
    else:
        print("Good bye!")
        break
