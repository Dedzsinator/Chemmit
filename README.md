[![License](https://img.shields.io/badge/License-Apache_2.0-blue.svg)](https://opensource.org/licenses/Apache-2.0)
[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)
![MySQL](https://img.shields.io/badge/mysql-%2300f.svg?style=for-the-badge&logo=mysql&logoColor=white)

### Chemmit
Ez a project egy egyszerűbb forum applikáció PHP, HTML, CSS és Javascript környezetben megírva. Főbb funkciói közé tartozik a posztok hozzáadása, az azokhoz való hozzászólás, a kategória alapú keresés, a biztonságos bejelentkezés és regisztráció és egy privát chat funkció is.

#### Tartalomjegyzék

* [Témaindoklás](#témaindoklás)
* [Követelmények](#követelmények)
* [Futtatása](#futtatása)
* [Felhasználói kézikönyv](#felhasználói-kézikönyv)
    * [Regisztráció-Bejelentkezés](#regisztráció-bejelentkezés)
    * [Posztok](#posztok)
    * [Kategóriák](#kategóriák)
    * [Csevegés](#csevegés)
    * [Egyéb](#egyéb)
* [Programozói kézikönyv](#programozói-kézikönyv)

## Témaindoklás
- Egy forum szerkezetű weboldal témáját legfőképpen mert egy ilyen felület a későbbiekben is felhasználható egyéb hasonló szerkezetű projektekre.
- A forum fő tematikája a kémia, melyet azért választottam mert mindig is érdekelt a kémia világa

## Követelmények
A project futtatásához szükséges előkészületek:
- A legfrisebb (2022/12/19) verziójú XAMPP.
- A phpMyAdmin adatbázis környezete mariadb kell legyen
- Szükséges a mellékelt adatbázis információk fájljának futtatása.
- szükséges a project forráskódja

## Futtatása
A futtatásának lépései:
- A project mappájának a webserver-be helyezése.
- Importálni kell az sql könyvtárban található `forum.sql` fájlt az adatbázisba. Ez létrehozza a fórum működéséhez szükséges táblázatokat.
- Nyissa meg a `config.php` fájlt, amely az `php` könyvtárban található, és adja meg a MySQL adatbázis hitelesítő adatait.
- Mostantól elérheti a fórumot webböngészőjén keresztül.

## Felhasználói kézikönyv

##### &nbsp;&nbsp;&nbsp;Regisztráció-Bejelentkezés

- Az oldal megnyitásakor a bejelentkező oldal fogad
- Amennyiben nincs fiókunk a bejelentkező menü alsó részében található a regisztráció gomb.
- A regisztrálás és bejelentkezés után a főoldal fogad ahol látható az összes poszt

##### &nbsp;&nbsp;&nbsp;Posztok

- A főoldalon található meg az összes poszt időrendi sorrendben és egy `textarea` ahova saját posztot tudunk létrehozni kategóriával és címmel

- A posztokhoz és a posztok alatt levő hozzászólásokhoz is külön-külön hozzá lehet szólni

##### &nbsp;&nbsp;&nbsp;Kategóriák

- A menü első opciója a kategóriák fül mely egy lenyiló menü és ott megtalálható az összes poszt kategóriákra bontva

- Ezen az oldalon is ugyanúgy elérhetőek a fent említett funkciók

##### &nbsp;&nbsp;&nbsp;Csevegés
- A menü `Csevegés` menüpontjára kattintva elérhetővé válik egy csevegőfelület melyben a jelenleg bejelentkezett és aktív felhasználókkal lehet csevegni

##### &nbsp;&nbsp;&nbsp;Egyéb
- A menü jobb fenti részében megtalálható egy csúszka melyre rákattintva megváltozik az oldal stílusa

## Programozói kézikönyv
Fontosabb tudnivalók az esetleges kontribúciókhoz:
- A bejelentkezési rendszer biztonsági okokból salt-hashing titkosítást használ a jelszavaknál, ennek függvényében kell a jelszavakat kezelni.
- A stílusok szineinek megváltoztatásáhot a `style.css` file tetején található értékket kell változtatni.
- a bejelentkezéshez kért képeket a program az `images` mappába menti. Itt potenciális overflow attack megtörténhet.

## Fejlesztési lehetőségek

- Bármiféle fejlesztési lehetőséget github pull requestek formájában lehet előterjeszteni a projekt github oldalán:

&nbsp;&nbsp;[Chemmit-Forum github oldala](https://github.com/Dedzsinator/Chemmit "Chemmit-Forum")
