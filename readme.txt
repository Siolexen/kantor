Tworzenie bazy:
W konsoli w katalogu naszego projektu wpisujemy: mysql --host=localhost --user=root -p < init.sql
Jesli nie znajduje polecenia mysql to trzeba dodac mysql do zmiennej srodowiskowej. Mysql jest w xampie - potrzebny plik mysql.exe.
Jesli nie wystapi zaden blad, utworzy sie baza danych cantor z tabelami: users, wallets i transactionHistory.