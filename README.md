# BeeProject 
A **BeeProject** egy oktató weboldal, amely bemutatja a méhek szerepét az ökoszisztémában, a városi méhészet lehetőségeit, valamint a beporzás és fenntarthatóság kapcsolatát.

## Főbb funkciók
- **A méhek világa**: Információ a méhek életéről és veszélyeztetettségükről
- **Városi méhészet**: Tippek és példák méhészkedésre városi környezetben
- **Oktatás és tudatosság**: Képes tartalom és játékos szemléltetés
- **Fórum** *(tervezett funkció)*: Közösségi részvétel, tapasztalatcsere

## Használat

1. Klónozd a repository-t:
   ```bash
   git clone https://github.com/felhasznalonev/beeproject.git

2. (Opcionális, de ajánlott) Hozz létre szimbolikus linket XAMPP-hoz Windows rendszeren:
   mklink /D "C:\xampp\htdocs\beeproject" "D:\Git\Projects\beeproject"

3. Indítsd el az Apache szervert a XAMPP-ban

4. Nyisd meg a böngészőben:
   http://localhost/beeproject/

## Technológiák
- HTML5, CSS3, SCSS
- JavaScript (DOM manipuláció, scroll és slideshow funkciók)
- PHP (dinamikus tartalomhoz, routinghoz)
- XAMPP (lokális szerver környezet)

## Mappa struktúra
beeproject/
├── assets/
├── pages/
├── includes/
├── config/
├── index.php
└── README.md