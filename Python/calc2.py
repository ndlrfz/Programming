def tambah(x, y):
    return x + y


def kurang(x, y):
    return x - y


def kali(x, y):
    return x * y


def bagi(x, y):
    return x / y


done = False
while not done:
    print("Pilih operasi:")
    print("+ untuk Penambahan")
    print("- untuk Pengurangan")
    print("x untuk Perkalian")
    print("/ untuk Pembagian")
    print("q untuk Keluar")

    operasi = input(":: ")

    if operasi == "+":
        nilai1 = int(input("Nilai1: "))
        nilai2 = int(input("Nilai2: "))
        print("Hasil", nilai1, "+", nilai2, "=", tambah(nilai1, nilai2))
    elif operasi == "-":
        nilai1 = int(input("Nilai1: "))
        nilai2 = int(input("Nilai2: "))
        print("Hasil", nilai1, "-", nilai2, "=", kurang(nilai1, nilai2))
    elif operasi == "x":
        nilai1 = int(input("Nilai1: "))
        nilai2 = int(input("Nilai2: "))
        print("Hasil", nilai1, "x", nilai2, "=", kali(nilai1, nilai2))
    elif operasi == "/":
        nilai1 = int(input("Nilai1: "))
        nilai2 = int(input("Nilai2: "))
        print("Hasil", nilai1, "/", nilai2, "=", bagi(nilai1, nilai2))
    elif operasi == "q":
        print("Good bye!")
        done = True
    else:
        print("Invalid choice!")
