[![License](https://img.shields.io/badge/License-Apache_2.0-blue.svg)](https://opensource.org/licenses/Apache-2.0)
[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)

### Chemmit
Ez a project egy egyszerűbb forum applikáció PHP, HTML, CSS és Javascript környezetben megírva. Főbb funkciói közé tartozik a posztok hozzáadása, az azokhoz való hozzászólás, a kategória alapú keresés, a biztonságos bejelentkezés és regisztráció és egy privát chat funkció is.

#### Követelmények
A project futtatásához szükséges előkészületek:
- A legfrisebb (2022/12/19) verziójú XAMPP.
- A phpMyAdmin adatbázis környezete mariadb kell legyen
- Szükséges a mellékelt adatbázis információk fájljának futtatása.
- szükséges a project forráskódja

#### Futtatása
A futtatásának lépései:
- A project mappájának a webserver-be helyezése.
- Importálni kell az sql könyvtárban található `forum.sql` fájlt az adatbázisba. Ez létrehozza a fórum működéséhez szükséges táblázatokat.
- Nyissa meg a `config.php` fájlt, amely az `php` könyvtárban található, és adja meg a MySQL adatbázis hitelesítő adatait.
- Mostantól elérheti a fórumot webböngészőjén keresztül.

#### Programozói kézikönyv
Fontosabb tudnivalók az esetleges kontribúciókhoz:
- A bejelentkezési rendszer biztonsági okokból salt-hashing titkosítást használ a jelszavaknál, ennek függvényében kell a jelszavakat kezelni.
- A stílusok szineinek megváltoztatásáhot a `style.css` file tetején található értékket kell változtatni.
- a bejelentkezéshez kért képeket a program az `images` mappába menti. Itt potenciális overflow attack megtörténhet.
