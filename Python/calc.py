# Interactive
# Penambahan
# Pengurangan
# Pembagian
# Perkalian
# user execute > Welcome dan pilihan > execute yang di atas > selesai balik 
#
#

def tambah(num1, num2):
    return num1 + num2

def kurang(num1, num2):
    return(num1 - num2)

def kali(num1, num2):
    return(num1 * num2)

def bagi(num1, num2):
    return(num1 / num2)

print('''Selemat datang di Kalkulator sederhana.
Silahkan Pilih menu di bawah!''')

print('''
+ untuk Penambahan
- untuk Pengurangan
x untuk Perkalian
/ untuk Pembagian
q untuk exit''')

operasi = input("Operasi yang akan dilakukan: ")

nilai1 = int(input('Nilai 1: '))
nilai2 = int(input('Nilai 2: '))

# if else 
# jika + maka xxx + xxx
# print hasil

if operasi == '+':
    print('Hasil', nilai1, '+', nilai2, '=', tambah(nilai1, nilai2))
    menu()

elif operasi == '-':
    print('Hasil', nilai1, '-', nilai2, '=', kurang(nilai1, nilai2))

elif operasi == 'x':
    print('Hasil', nilai1, 'x', nilai2, '=', kali(nilai1, nilai2))

elif operasi == '/':
    print('Hasil', nilai1, '/', nilai2, '=', bagi(nilai1, nilai2))

else:
    print('Invalid command')
