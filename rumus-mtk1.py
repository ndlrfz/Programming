# Persegi
# Persegi Panjan
# Segitiga
# lingkaran
#
# Keliling
# Luas
#


def luas_persegi(sisi):
    return sisi * sisi


def kel_persegi(sisi):
    return 4 * sisi


def luas_persegip(panjang, lebar):
    return panjang * lebar


def kel_persegip(panjang, lebar):
    return 2 * (panjang + lebar)


def luas_segitiga(alas, tinggi):
    return 0.5 * alas * tinggi


def kel_segitiga(alas, siku1, siku2):
    return alas + siku1 + siku2


def luas_lingkaran(jari):
    pangkat = jari**2
    return 3.14 * pangkat


def kel_lingkaran(jari):
    return (2 * 22 / 7) * jari


done = False
while not done:
    print("Pilih operasi:")
    print("1 - Luas Persegi")
    print("2 - Keliling Persegi")
    print("3 - Luas Persei Panjang")
    print("4 - Keliling Persegi Panjang")
    print("5 - Luas Segitiga")
    print("6 - Keliling Segitiga")
    print("7 - Luas Lingkaran")
    print("8 - Keliling Lingkaran")
    print("q untuk Keluar")

    operasi = input(":: ")

    if operasi == "1":
        sisi = int(input("Berapa panjang sisinya: "))
        print("Luas persegi dg panjang sisi", sisi, "adalah", luas_persegi(sisi))
    elif operasi == "2":
        sisi = int(input("Berapa panjang sisinya: "))
        print("Keliling persegi dg panjang sisi", sisi, "adalah", kel_persegi(sisi))
    elif operasi == "3":
        panjang = int(input("Berapa panjangnya: "))
        lebar = int(input("Berapa lebarnya: "))
        print(
            "Luas persegi panjang dg panjang ",
            panjang,
            "dan lebar ",
            lebar,
            "adalah",
            luas_persegip(panjang, lebar),
        )
    elif operasi == "4":
        panjang = int(input("Berapa panjangnya: "))
        lebar = int(input("Berapa lebarnya: "))
        print(
            "Keliling persegi panjang dg panjang",
            panjang,
            "dan lebar",
            lebar,
            "adalah",
            kel_persegip(panjang, lebar),
        )
    elif operasi == "5":
        alas = int(input("Alasnya berapa? "))
        tinggi = int(input("Tingginya berapa? "))
        print(
            "Luas Segitiga dg",
            alas,
            "dan tinggi",
            tinggi,
            "adalah",
            int(luas_segitiga(alas, tinggi)),
        )
    elif operasi == "6":
        alas = int(input("Berapa alasnya? "))
        siku1 = int(input("Berapa siku kanan-nya? "))
        siku2 = int(input("Berapa siku kiri-nya? "))
        print(
            "Keliling segitiga dg alas",
            alas,
            ", siku1",
            siku1,
            "dan siku2",
            siku2,
            "adalah",
            kel_segitiga(alas, siku1, siku2),
        )
    elif operasi == "7":
        jari = int(input("Berapa jari-jari Lingkaranmu? "))
        print("Luas lingkaran dg jari-jari", jari, "adalah", int(luas_lingkaran(jari)))
    elif operasi == "8":
        jari = int(input("Berapa jari-jari Lingkaranmu? "))
        print(
            "Keliling Lingkaran dg jari-jari", jari, "adalah", int(kel_lingkaran(jari))
        )
    elif operasi == "q":
        print("Good Bye!")
        done = True
    else:
        print("Invalid choice!")
