# import module math untuk menyediakan fungsi matematika, seperti nilai 'pi'
import math

# Melvin Austin
# 2KA18 - 10121709


# function menghitung luas persegi panjang
def persegiPanjang():
    # input variable panjang dan lebar dan ditetapkan sebagai float type
    panjang = float(input("\nMasukkan panjang persegi panjang: "))
    lebar = float(input("Masukkan lebar persegi panjang: "))
    luas = panjang * lebar
    print(f"Luas persegi panjang adalah: {luas}")


# function menghitung luas segitiga
def segitiga():
    # input variable alas dan tinggi dan ditetapkan sebagai float type
    alas = float(input("\nMasukkan alas segitiga: "))
    tinggi = float(input("Masukkan tinggi segitiga: "))
    # perhitungan luas
    luas = 0.5 * alas * tinggi
    print(f"Luas segitiga adalah: {luas}")


# function menghitung luas lingkaran
def lingkaran():
    # input variable jari-jari dan ditetapkan sebagai float type
    jariJari = float(input("Masukkan jari-jari lingkaran: "))
    # perhitungan variable luas menggunakan pi dengan module math pada awal program
    luas = math.pi * jariJari**2
    print(f"Luas lingkaran adalah: {luas}")


# menggunakan looping/perulangan while ketika kondisi true (yang dimana kondisi ini benar
# karena kondisi default looping adalah true sehingga program akan terus berulang
# sampai user memasukkan input "4" untuk keluar)
while True:
    print("\nPilih salah satu opsi:")
    print("1. Menghitung luas persegi panjang: ")
    print("2. Menghitung luas segitiga: ")
    print("3. Menghitung luas lingkaran: ")
    print("4. Keluar")

    # membatasi input sebagai integer type
    pilihan = int(input("Masukkan pilihan anda: "))

    # menggunakan if-else condition / perkondisioan
    if pilihan == 1:
        persegiPanjang()
    elif pilihan == 2:
        segitiga()
    elif pilihan == 3:
        lingkaran()
    elif pilihan == 4:
        print("Terima kasih telah menggunakan program ini.")
        break
    else:
        print("Pilihan tidak valid. Silakan pilih opsi yang tersedia.")
