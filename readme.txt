Tworzenie bazy:
W konsoli w katalogu naszego projektu wpisujemy: mysql --host=localhost --user=root -p < init.sql
Jesli nie znajduje polecenia mysql to trzeba dodac mysql do zmiennej srodowiskowej. Mysql jest w xampie - potrzebny plik mysql.exe.
Jesli nie wystapi zaden blad, utworzy sie baza danych cantor z tabelami: users, wallets i transactionHistory.

Struktura katalogów:

views - widoki podstron
controllers - logika aplikacji
models - opreacje na bazie danych

![alt tag](https://user-images.githubusercontent.com/22130117/33186543-8e07da64-d08a-11e7-9ae6-94d1d5aeece4.png)
