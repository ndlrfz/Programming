#!/usr/bin/python3
"""
Converter: Km to m and Kg to g
1 KM = 1000 meter
1 KG = 1000 gram

Alur:
1. select converter
2. input number int
3. convert
4. print hasil
"""


def menu():
    """
    Menu
    """
    print("======================================")
    print("Silahkan pilih menu di bawah:")
    print("1) KG to gram (Kilogram to Gram)")
    print("2) KM to meter (Kilo meter to Meter)")
    print("======================================")


def kg_to_gram():
    """
    function KG to Gram
    """
    kg = int(input("Berapa KG? "))
    conv_kg = kg * 1000
    print(f"{kg}kg adalah {conv_kg}gram.")


def km_to_m():
    """
    function km to m => <= -> <- !=
    """
    km = int(input("Beraka KM? "))
    conv_km = km * 1000
    print(f"{km}km adalah {conv_km}m.")


while True:
    menu()
    choice = int(input("Masukan menu:: "))
    if choice == 1:
        kg_to_gram()  # function kg to gram
    elif choice == 2:
        km_to_m()  # function km to m
    else:
        break
