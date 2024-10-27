# max nilai 70
# pelajaran
# mtk
# ipa
# bindo


def welcome():
    print("""
    Selamat datang
    Silahkan cek nilaimu
    LULUS atau TIDAK?\n""")


def calculate():
    nmax = 70
    print("Berapa nilai semua mata pelajaranmu:")
    mtk = int(input("Matematika:: "))
    ipa = int(input("Ilmu Pengetahuan Alam:: "))
    bindo = int(input("Bahasa Indonesia:: "))

    if (mtk >= nmax) and (ipa >= nmax) and (bindo >= nmax):
        print("Selamat kamu LULUS!")
    else:
        print("Coba ulang kembali pelajarnmu!")


welcome()
calculate()
