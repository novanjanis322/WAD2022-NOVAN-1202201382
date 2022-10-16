import os
import ProgramRestoran_database

#------------------MENU UTAMA------------------#
def menu_utama():
    print('''
    =================Program Restoran=================
    1. Menginput pesanan
    2. Daftar pesanan
    3. Total penghasilan
    4. Stok
    5. Tutup program
    ''')
    try:
        pilihmenu_utama=int(input('silahkan pilih menu yang akan dipilih(1/2/3/4/5):'))
        if pilihmenu_utama==1:
            ProgramRestoran_database.pesanan+=1
            print(f'pesanan ke:{ProgramRestoran_database.pesanan}')
            input_pesanan()
        elif pilihmenu_utama==2:
            daftar_pesanan()
        elif pilihmenu_utama==3:
            total_penghasilan()
        elif pilihmenu_utama==4:
            stok()
        elif pilihmenu_utama==5:
            print('program selesai. Semoga harimu menyenangkan.\U0001f604 ')
        else:
           print('hanya bisa memilih nomor menu yang tertera. Coba lagi.')
           menu_utama()
    except ValueError:
        os.system('cls')
        print('hanya bisa menggunakan bentuk integer. Coba lagi.')
        menu_utama()
#=================Menu 1. Menginput Pesanan=================#

#------------------menu input pesanan------------------#   
def input_pesanan():
    print('''
        1. Appetizer
        2. maincourse
        3. Desserts
        4. Beverages
        5. Kemali ke menu utama''')
    try:
        pilihmenu=int(input('pilih  yang akan dipilih(1/2/3/4/5):'))
        if pilihmenu==1:
            menu_appetizer()
        elif pilihmenu==2:
            menu_maincourse()
        elif pilihmenu==3:
            menu_desserts()
        elif pilihmenu==4:
            menu_beverages()
        elif pilihmenu==5:
            if ProgramRestoran_database.penghasilan==0:
                ProgramRestoran_database.pesanan-=1
                os.system('cls')
                print('kembali ke menu utama.')
                menu_utama()
            elif ProgramRestoran_database.penghasilan>0:
                ProgramRestoran_database.list_penghasilan.append(ProgramRestoran_database.penghasilan)
                input_txt=open('Pesanan.txt',"a")
                input_txt.write('\n----------------------------------------------------------------')
                input_txt.write(f'\nTotal biaya\t\t\t\t\t{ProgramRestoran_database.list_penghasilan[ProgramRestoran_database.pesanan-1]}')
                input_txt.write('\n==============================================================================================\n')
                input_txt.close()
                ProgramRestoran_database.penghasilan=0
                os.system('cls')
                print('kembali ke menu utama.')
                menu_utama()
        else:
            os.system('cls')
            print('Hanya bisa memilih dari 1-5. Silahkan ulangi dari awal.')
            input_pesanan()
    except:
        os.system('cls')
        print('hanya bisa menggunakan bentuk integer. Coba lagi.')
        input_pesanan()

#------------------menu appetizer------------------#
def menu_appetizer():
    print('''menu appetizer:
        1. Miso Soup 
        2. Cream Soup\U0001f929
        3. Chicken Wing
        4. French Toast
        5. Salad buah
        6. Sandwich Bites\U0001f929
        7. Kembali ke menu 'input pesanan'.
        \U0001f929 =menu favorit''')
    try:
        pilih_appetizer=int(input('silahkan pilih menu appetizer:'))
        if pilih_appetizer>0 and pilih_appetizer<7:
            try:
                jumlah=int(input('berapa jumlah makanan yang anda pilih:'))
                if jumlah<=0:
                    os.system('cls')
                    print('Input jumlah minimal 1. Kembali ke menu appetizer.')
                    menu_appetizer()
                else:
                    sudahbenar=(input(f'apakah input menu {ProgramRestoran_database.list_makan_appetizer[pilih_appetizer-1]} dengan jumlah {jumlah} sudah benar(ya/tidak)?'))
                    if sudahbenar=="ya":
                        if ProgramRestoran_database.list_stok_appetizer[pilih_appetizer-1]==0:
                            print('maaf. Stok menu '+ProgramRestoran_database.list_makan_appetizer[pilih_appetizer-1]+' sudah habis. Silahkan pilih menu lain.')
                            menu_appetizer()
                        elif ProgramRestoran_database.list_stok_appetizer[pilih_appetizer-1]-jumlah < 0:
                            print(f'maaf. Stok menu {ProgramRestoran_database.list_makan_appetizer[pilih_appetizer-1]} hanya tersisa {ProgramRestoran_database.list_stok_appetizer[pilih_appetizer-1]}.Silahkan pilih menu lain.')
                            menu_appetizer()
                        elif ProgramRestoran_database.penghasilan==0:
                            input_txt=open('Pesanan.txt',"a")
                            input_txt.write(f"pesanan ke:{ProgramRestoran_database.pesanan}\n\nmenu\t\t\tjumlah item\t\ttotal harga")
                            input_txt.close()
                            totalharga=jumlah*ProgramRestoran_database.list_harga_appetizer[pilih_appetizer-1]*110/100
                            ProgramRestoran_database.list_stok_appetizer[pilih_appetizer-1]=ProgramRestoran_database.list_stok_appetizer[pilih_appetizer-1]-jumlah
                            ProgramRestoran_database.penghasilan+=totalharga
                            input_txt=open('Pesanan.txt',"a")
                            input_txt.write('\n'+ProgramRestoran_database.list_makan_appetizer[pilih_appetizer-1]+f'\t\t\t{jumlah}'+f'\t\t{totalharga}')
                            input_txt.close()
                            os.system('cls')
                            print('menu',ProgramRestoran_database.list_makan_appetizer[pilih_appetizer-1],'dengan jumlah',jumlah,'dan total harga',totalharga,'berhasil ditambahkan.')
                            menu_appetizer()
                        else:
                            totalharga=jumlah*ProgramRestoran_database.list_harga_appetizer[pilih_appetizer-1]*110/100
                            ProgramRestoran_database.list_stok_appetizer[pilih_appetizer-1]=ProgramRestoran_database.list_stok_appetizer[pilih_appetizer-1]-jumlah
                            ProgramRestoran_database.penghasilan+=totalharga
                            input_txt=open('Pesanan.txt',"a")
                            input_txt.write('\n'+ProgramRestoran_database.list_makan_appetizer[pilih_appetizer-1]+f'\t\t\t{jumlah}'+f'\t\t{totalharga}')
                            input_txt.close()
                            os.system('cls')
                            print('menu',ProgramRestoran_database.list_makan_appetizer[pilih_appetizer-1],'dengan jumlah',jumlah,'dan total harga',totalharga,'berhasil ditambahkan.')
                            menu_appetizer()
                    elif sudahbenar=="tidak":
                        os.system('cls')
                        print('tidak jadi menambahkan data. Kembali ke menu appetizer.')
                        menu_appetizer()
                    else:
                        raise Exception
            except:
                os.system('cls')
                print('anda salah input dan tidak jadi menambah data.Kembali ke menu appetizer.')
                menu_appetizer()
        elif pilih_appetizer==7:
            os.system('cls')
            print('Anda dikembalikan ke menu input pesanan.')
            input_pesanan()
        else:
            os.system('cls')
            print('Hanya bisa memilih dari 1-7. Kembali ke menu appetizer.')
            menu_appetizer()
    except ValueError:
        os.system('cls')
        print('hanya bisa menggunakan bentuk integer. Coba lagi.')
        menu_appetizer()

#------------------menu maincourse------------------#
def menu_maincourse():
    print('''menu maincourse:
        1. Fried Rice
        2. Fried Noodle
        3. Beef Teriyaki\U0001f929
        4. Beef Yakiniku
        5. Chicken Katsu
        6. Pepperoni Pizza\U0001f929
        7. Kembali ke menu 'input pesanan'
        \U0001f929 =menu favorit''')
    try:
        pilih_maincourse=int(input('silahkan pilih menu maincourse:'))
        if pilih_maincourse>0 and pilih_maincourse<7:
            try:
                jumlah=int(input('berapa jumlah makanan yang anda pilih:'))
                if jumlah<=0:
                    os.system('cls')
                    print('Input jumlah minimal 1. Kembali ke menu maincourse.')
                    menu_maincourse()
                else:
                    sudahbenar=(input(f'apakah input menu {ProgramRestoran_database.list_makan_maincourse[pilih_maincourse-1]} dengan jumlah {jumlah} sudah benar(ya/tidak)?'))
                    if sudahbenar=="ya":
                        if ProgramRestoran_database.list_stok_maincourse[pilih_maincourse-1]==0:
                            print('maaf. Stok menu ' +ProgramRestoran_database.list_makan_maincourse[pilih_maincourse-1]+ ' sudah habis. Silahkan pilih menu lain.')
                            menu_maincourse()
                        elif ProgramRestoran_database.list_stok_maincourse[pilih_maincourse-1]-jumlah < 0:
                            print(f'maaf. Stok menu {ProgramRestoran_database.list_makan_maincourse[pilih_maincourse-1]} hanya tersisa {ProgramRestoran_database.list_stok_maincourse[pilih_maincourse-1]}.Silahkan pilih menu lain.')
                            menu_maincourse()
                        elif ProgramRestoran_database.penghasilan==0:
                            input_txt=open('Pesanan.txt',"a")
                            input_txt.write(f"pesanan ke:{ProgramRestoran_database.pesanan}\n\nmenu\t\t\tjumlah item\t\ttotal harga")
                            input_txt.close()
                            totalharga=jumlah*ProgramRestoran_database.list_harga_maincourse[pilih_maincourse-1]*110/100
                            ProgramRestoran_database.list_stok_maincourse[pilih_maincourse-1]=ProgramRestoran_database.list_stok_maincourse[pilih_maincourse-1]-jumlah
                            ProgramRestoran_database.penghasilan+=totalharga
                            input_txt=open('Pesanan.txt',"a")
                            input_txt.write('\n'+ProgramRestoran_database.list_makan_maincourse[pilih_maincourse-1]+f'\t\t\t{jumlah}'+f'\t\t{totalharga}')
                            input_txt.close()
                            os.system('cls')
                            print('menu',ProgramRestoran_database.list_makan_maincourse[pilih_maincourse-1],'dengan jumlah',jumlah,'dan total harga',totalharga,'berhasil ditambahkan.')
                            menu_maincourse()
                        else:
                            totalharga=jumlah*ProgramRestoran_database.list_harga_maincourse[pilih_maincourse-1]*110/100
                            ProgramRestoran_database.list_stok_maincourse[pilih_maincourse-1]=ProgramRestoran_database.list_stok_maincourse[pilih_maincourse-1]-jumlah
                            ProgramRestoran_database.penghasilan+=totalharga
                            input_txt=open('Pesanan.txt',"a")
                            input_txt.write('\n'+ProgramRestoran_database.list_makan_maincourse[pilih_maincourse-1]+f'\t\t\t{jumlah}'+f'\t\t{totalharga}')
                            input_txt.close()
                            os.system('cls')
                            print('menu',ProgramRestoran_database.list_makan_maincourse[pilih_maincourse-1],'dengan jumlah',jumlah,'dan total harga',totalharga,'berhasil ditambahkan.')
                            menu_maincourse()
                    elif sudahbenar=="tidak":
                        os.system('cls')
                        print('tidak jadi menambahkan data. Kembali ke menu maincourse.')
                        menu_maincourse()
                    else:
                        raise Exception
            except:
                os.system('cls')
                print('anda salah input dan tidak jadi menambah data.Kembali ke menu maincourse.')
                menu_maincourse()
        elif pilih_maincourse==7:
            os.system('cls')
            print('Anda dikembalikan ke menu input pesanan.')
            input_pesanan()
        else:
            os.system('cls')
            print('Hanya bisa memilih dari 1-7. Kembali ke menu maincourse.')
            menu_maincourse()
    except ValueError:
        os.system('cls')
        print('hanya bisa menggunakan bentuk integer. Coba lagi.')
        menu_maincourse()
#------------------menu desserts------------------#
def menu_desserts():
    print('''menu desserts:
        1. Strawberry Cake
        2. Cheese Cake\U0001f929
        3. Ice Cream
        4. Vla Pudding
        5. Kembali ke menu 'input pesanan'
        \U0001f929 =menu favorit''')
    try:
        pilih_desserts=int(input('silahkan pilih menu desserts:'))
        if pilih_desserts>0 and pilih_desserts<5:
            try:
                jumlah=int(input('berapa jumlah makanan yang anda pilih:'))
                if jumlah<=0:
                    os.system('cls')
                    print('Input jumlah minimal 1. Kembali ke menu desserts.')
                    menu_desserts()
                else:
                    sudahbenar=(input(f'apakah input menu {ProgramRestoran_database.list_makan_desserts[pilih_desserts-1]} dengan jumlah {jumlah} sudah benar(ya/tidak)?'))
                    if sudahbenar=="ya":
                        if ProgramRestoran_database.list_stok_desserts[pilih_desserts-1]==0:
                            print('maaf. Stok menu ' +ProgramRestoran_database.list_makan_desserts[pilih_desserts-1]+ ' sudah habis. Silahkan pilih menu lain.')
                            menu_desserts()
                        elif ProgramRestoran_database.list_stok_desserts[pilih_desserts-1]-jumlah < 0:
                            print(f'maaf. Stok menu {ProgramRestoran_database.list_makan_desserts[pilih_desserts-1]} hanya tersisa {ProgramRestoran_database.list_stok_desserts[pilih_desserts-1]}.Silahkan pilih menu lain.')
                            menu_desserts()
                        elif ProgramRestoran_database.penghasilan==0:
                            input_txt=open('Pesanan.txt',"a")
                            input_txt.write(f"pesanan ke:{ProgramRestoran_database.pesanan}\n\nmenu\t\t\tjumlah item\t\ttotal harga")
                            input_txt.close()
                            totalharga=jumlah*ProgramRestoran_database.list_harga_desserts[pilih_desserts-1]*110/100
                            ProgramRestoran_database.list_stok_desserts[pilih_desserts-1]=ProgramRestoran_database.list_stok_desserts[pilih_desserts-1]-jumlah
                            ProgramRestoran_database.penghasilan+=totalharga
                            input_txt=open('Pesanan.txt',"a")
                            input_txt.write('\n'+ProgramRestoran_database.list_makan_desserts[pilih_desserts-1]+f'\t\t\t{jumlah}'+f'\t\t{totalharga}')
                            input_txt.close()
                            os.system('cls')
                            print('menu',ProgramRestoran_database.list_makan_desserts[pilih_desserts-1],'dengan jumlah',jumlah,'dan total harga',totalharga,'berhasil ditambahkan.')
                            menu_desserts()
                        else:
                            totalharga=jumlah*ProgramRestoran_database.list_harga_desserts[pilih_desserts-1]*110/100
                            ProgramRestoran_database.list_stok_desserts[pilih_desserts-1]=ProgramRestoran_database.list_stok_desserts[pilih_desserts-1]-jumlah
                            ProgramRestoran_database.penghasilan+=totalharga
                            input_txt=open('Pesanan.txt',"a")
                            input_txt.write('\n'+ProgramRestoran_database.list_makan_desserts[pilih_desserts-1]+f'\t\t\t{jumlah}'+f'\t\t{totalharga}')
                            input_txt.close()
                            os.system('cls')
                            print('menu',ProgramRestoran_database.list_makan_desserts[pilih_desserts-1],'dengan jumlah',jumlah,'dan total harga',totalharga,'berhasil ditambahkan.')
                            menu_desserts()
                    elif sudahbenar=="tidak":
                        os.system('cls')
                        print('tidak jadi menambahkan data. Kembali ke menu desserts.')
                        menu_desserts()
                    else:
                        raise Exception
            except:
                os.system('cls')
                print('anda salah input dan tidak jadi menambah data.Kembali ke menu desserts.')
                menu_desserts()
        elif pilih_desserts==5:
            os.system('cls')
            print('Anda dikembalikan ke menu input pesanan.')
            input_pesanan()
        else:
            os.system('cls')
            print('Hanya bisa memilih dari 1-5. Kembali ke menu desserts.')
            menu_desserts()
    except ValueError:
        os.system('cls')
        print('hanya bisa menggunakan bentuk integer. Coba lagi.')
        menu_desserts()
#------------------menu beverages------------------#
def menu_beverages():
    print('''menu beverages:
        1. Iced Tea 
        2. Lemon Tea
        3. Chocolate\U0001f929
        4. Thai Tea 
        5. Lemon Mojito
        6.\U0001f929Soda Gembira\U0001f929
        7. Kembali ke menu 'input pesanan'.
        \U0001f929 =menu favorit''')     
    try:
        pilih_beverages=int(input('silahkan pilih menu beverages:'))
        if pilih_beverages>0 and pilih_beverages<7:
            try:
                jumlah=int(input('berapa jumlah minuman yang anda pilih:'))
                if jumlah<=0:
                    os.system('cls')
                    print('Input jumlah minimal 1. Kembali ke menu beverages.')
                    menu_beverages()
                else:
                    sudahbenar=(input(f'apakah input menu {ProgramRestoran_database.list_beverages[pilih_beverages-1]} dengan jumlah {jumlah} sudah benar(ya/tidak)?'))
                    if sudahbenar=="ya":
                        if ProgramRestoran_database.list_stok_beverages[pilih_beverages-1]==0:
                            print('maaf. Stok menu ' +ProgramRestoran_database.list_beverages[pilih_beverages-1]+ ' sudah habis. Silahkan pilih menu lain.')
                            menu_beverages()
                        elif ProgramRestoran_database.list_stok_beverages[pilih_beverages-1]-jumlah < 0:
                            print(f'maaf. Stok menu {ProgramRestoran_database.list_beverages[pilih_beverages-1]} hanya tersisa {ProgramRestoran_database.list_stok_beverages[pilih_beverages-1]}.Silahkan pilih menu lain.')
                            menu_beverages()
                        elif ProgramRestoran_database.penghasilan==0:
                            input_txt=open('Pesanan.txt',"a")
                            input_txt.write(f"pesanan ke:{ProgramRestoran_database.pesanan}\n\nmenu\t\t\tjumlah item\t\ttotal harga")
                            input_txt.close()
                            totalharga=jumlah*ProgramRestoran_database.list_harga_beverages[pilih_beverages-1]*110/100
                            ProgramRestoran_database.list_stok_beverages[pilih_beverages-1]=ProgramRestoran_database.list_stok_beverages[pilih_beverages-1]-jumlah
                            ProgramRestoran_database.penghasilan+=totalharga
                            input_txt=open('Pesanan.txt',"a")
                            input_txt.write('\n'+ProgramRestoran_database.list_beverages[pilih_beverages-1]+f'\t\t\t{jumlah}'+f'\t\t{totalharga}')
                            input_txt.close()
                            os.system('cls')
                            print('menu',ProgramRestoran_database.list_beverages[pilih_beverages-1],'dengan jumlah',jumlah,'dan total harga',totalharga,'berhasil ditambahkan.')
                            menu_beverages()
                        else:
                            totalharga=jumlah*ProgramRestoran_database.list_harga_beverages[pilih_beverages-1]*110/100
                            ProgramRestoran_database.list_stok_beverages[pilih_beverages-1]=ProgramRestoran_database.list_stok_beverages[pilih_beverages-1]-jumlah
                            ProgramRestoran_database.penghasilan+=totalharga
                            input_txt=open('Pesanan.txt',"a")
                            input_txt.write('\n'+ProgramRestoran_database.list_beverages[pilih_beverages-1]+f'\t\t\t{jumlah}'+f'\t\t{totalharga}')
                            input_txt.close()
                            os.system('cls')
                            print('menu',ProgramRestoran_database.list_beverages[pilih_beverages-1],'dengan jumlah',jumlah,'dan total harga',totalharga,'berhasil ditambahkan.')
                            menu_beverages()
                    elif sudahbenar=="tidak":
                        os.system('cls')
                        print('tidak jadi menambahkan data. Kembali ke menu beverages.')
                        menu_beverages()
                    else:
                        raise Exception
            except:
                os.system('cls')
                print('anda salah input dan tidak jadi menambah data.Kembali ke menu beverages.')
                menu_beverages()
        elif pilih_beverages==7:
            os.system('cls')
            print('Anda dikembalikan ke menu input pesanan.')
            input_pesanan()
        else:
            os.system('cls')
            print('Hanya bisa memilih dari 1-7. Kembali ke menu beverages.')
            menu_beverages()
    except ValueError:
        os.system('cls')
        print('hanya bisa menggunakan bentuk integer. Coba lagi.')
        menu_beverages()
#=================Menu 1=================Batas bawah

#=================Menu 2. List Pesanan=================#
def daftar_pesanan():
    print('''============daftar pesanan sejauh ini============''')
    buka_txt=open('Pesanan.txt',"r")
    membaca=buka_txt.read()
    print(membaca)
    buka_txt.close()
    try:
        buka_lagi=input('ingin membuka daftar pesanan lagi(ya/tidak):')
        if buka_lagi=='ya':
            os.system('cls')
            daftar_pesanan()
        elif buka_lagi=='tidak':
            os.system('cls')
            print('kembali ke menu utama.')
            menu_utama()
        else:
            os.system('cls')
            print('input salah. Anda kembali ke menu utama.')
            menu_utama()
    except ValueError:
        os.system('cls')
        print('input salah. Anda kembali ke menu utama.')
        menu_utama()
#=================Menu 2. List Pesanan=================batas bawah

#=================Menu 3. Total Penghasilan=================#   
def total_penghasilan():
    print('============Total Penghasilan============\n')
    for i in range(0, ProgramRestoran_database.pesanan):
        print(f'penghasilan dari pesanan no.{i+1}: {ProgramRestoran_database.list_penghasilan[i]}')
        ProgramRestoran_database.totalpenghasilan+=ProgramRestoran_database.list_penghasilan[i]
    print('\n==============================================================')
    hpp=400000
    bebanlainlain=100000
    ppn10persen=ProgramRestoran_database.totalpenghasilan*10/100
    laba_kotor=ProgramRestoran_database.totalpenghasilan-hpp
    laba_bersih=laba_kotor-ppn10persen-bebanlainlain
    print(f'pendapatan penjualan\t\t\t\t{ProgramRestoran_database.totalpenghasilan}')
    print(f'HPP\t\t\t\t{hpp}')
    print(f'laba kotor\t\t\t\t\t{laba_kotor}')
    print('--------------------------------------------------------------')
    print(f'beban ppn\t\t\t{ppn10persen}')
    print(f'beban lain-lain\t\t\t{bebanlainlain}')
    print(f'laba bersih\t\t\t\t\t{laba_bersih}')
    print('--------------------------------------------------------------')
    ProgramRestoran_database.totalpenghasilan=0
    if laba_bersih<0:
        print(f"Restoran dalam kondisi rugi dengan kerugian sebesar {laba_bersih}")
        print('==============================================================')
    elif laba_bersih>0:
        print(f"Restoran dalam kondisi untung dengan laba bersih sebesar {laba_bersih}")
        print('==============================================================')
    elif laba_bersih==0:
        print(f"Restoran tidak pada kondisi untung ataupun rugi.")
        print('==============================================================')
    try:
        buka_lagi=input('ingin membuka total penghasilan lagi(ya/tidak):')
        if buka_lagi=='ya':
            os.system('cls')
            total_penghasilan()
        elif buka_lagi=='tidak':
            os.system('cls')
            print('kembali ke menu utama.')
            menu_utama()
        else:
            os.system('cls')
            print('input salah. Anda kembali ke menu utama.')
            menu_utama()
    except ValueError:
        os.system('cls')
        print('input salah. Anda kembali ke menu utama.')
        menu_utama()
#=================Menu 3. Total Penghasilan=================batas bawah

#=================Menu 4. Stok=================#
def stok():
    print('============stok makanan dan minuman============\n')
    print('------Stok appetizer------')
    for i in range (0, 6):
        print(f'{ProgramRestoran_database.list_makan_appetizer[i]}\t\t{ProgramRestoran_database.list_stok_appetizer[i]}')
    print('------Stok maincourse------')
    for i in range (0, 6):
        print(f'{ProgramRestoran_database.list_makan_maincourse[i]}\t\t{ProgramRestoran_database.list_stok_maincourse[i]}')
    print('------Stok desserts------')   
    for i in range (0, 4):
        print(f'{ProgramRestoran_database.list_makan_desserts[i]}\t\t{ProgramRestoran_database.list_stok_desserts[i]}')
    print('------Stok beverages------')  
    for i in range (0, 6):
        print(f'{ProgramRestoran_database.list_beverages[i]}\t\t{ProgramRestoran_database.list_stok_beverages[i]}')
    try:
        buka_lagi=input('ingin membuka stok lagi(ya/tidak):')
        if buka_lagi=='ya':
            os.system('cls')
            stok()
        elif buka_lagi=='tidak':
            os.system('cls')
            print('kembali ke menu utama.')
            menu_utama()
        else:
            os.system('cls')
            print('input salah. Anda kembali ke menu utama.')
            menu_utama()
    except ValueError:
        os.system('cls')
        print('input salah. Anda kembali ke menu utama.')
        menu_utama()   
#=================Menu 4. Stok=================batas bawah
menu_utama()

#created by:
# Novan Janis Aditya Halawa
# 1202201382
# S1 Sistem Informasi 2020/2021 (SI-44-03)
# Telkom University
