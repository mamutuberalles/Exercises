
<h1>dbkezelo Adatbáziskezelő</h1>
<h2>Mi ez?</h2>
Ez egy adatbázis kezelő interfész, ami PHP-ban lett írva. 4 oldalt tartalmaz: létrehozás, listázás, törlés, módosítás. Az interfész jelenleg csak egy táblában tud adatot változtatni.
<h2>Mi kell hozzá?</h2>
XAMPP vagy bármely más MySQL felülettel rendelkező program.
<h2>Hogy használjam?</h2>
1. Töltsd le a mappát és rakd be ide (ha XAMPP-d van): `C:\xampp\htdocs\`
3. Hozd létre a táblákat a `localhost/phpmyadmin` oldalon eszerint:
 * Hozz létre egy id oszlopot, legyen int típusú és max 11 karakter - legyen AI és kulcs
 * Hozz létre egy username oszlopot, legyen varchar típusú és max 32 karakter
 * Hozz létre egy password oszlopot, legyen varchar típusú és max 200 karakter
4. Konfiguráld be a "db.php"-t megfelelően
2. Ezután a `localhost/dbkezelo/` URL-en fogod elérni az adatbáziskezelőt
