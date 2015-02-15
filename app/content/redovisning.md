Redovisning
====================================
 
Kmom02: Kontroller och modeller
------------------------------------

Detta var ett ganska jobbigt moment av flera anledningar.
Tidigare under kurspaketet så har jag hela tiden upplevt att jag har en viss nytta av tidigare erfarenheter och kunskaper, det är det nog slut med nu...
Själva uppgiften tog en stund att komma igång med, eftersom jag inte fick ihop hur det satt ihop, men när jag väl fått kläm på det så gick krav 1-4 ganska snabbt.

Det femte kravet var dock lite svårare att få till, men det gick efter en del tricksande.
Lite udda kanske, men det jag hade störst problem med var inte hur inläggen skulle lagras i sessionen, 
utan smådetajer som till exempel hur man får redirecten att peka på rätt sida efter en redigering eller radering.
Jag hade även lite problem med att parametrar helt enkelt inte "kom fram", men det var bara att sätta sig och följa hur sidan är uppbyggd så hittade jag alla felen till slut.
Speciellt var det parametern sourcePage, som jag använder för att bestämma vilken instans av kommentarssystemet som används, som hade en tendens att krångla.
Kommentarerna borde för övrigt fungera på ett obegränsat antal sidor, men jag har som mest testat med tre.

Composer hade jag inga större problem att få igång, vare sig lokalt eller på sudentservern och jag hade inte heller några problem att använda det.
Packagist har jag inte tittat runt jättemycket i, men en del paket såg väl spännande ut. 
Personligen kommer jag kanske använda ett galleri för foton, eller varför inte ett paket för utskick av epost för ett projekt på jobbet.

Biten med dispatchers var nog det tuffaste att lära sig detta moment, men jag tror nog jag har en hyffsad koll på hur det fungerar.

Phpmvc/comment tyckte jag var en ganska lagom start, det var enkelt att följa vad som hände, 
och även enkelt att lägga till de funktioner för redigering och borttagning av en ensild kommentar.
Det som var lite svårare var ju då stödet för att kunna använda det på fler sidor.


Kmom01: PHP-baserade och MVC-inspirerade ramverk
------------------------------------
 
Då var det dags för tredje kursen i paketet.
Ett tuffare förstamoment än de tidigare kurserna, och det tog ett tag att få grepp om de olika delarna.
Jag får ändå säga att jag fått en övergripande förståelse för hur det fungerar, även om jag kan behöva fördjupa mig i vissa detaljer. 
Min tidigare erfarenhet av ramverk begränsar sig till att jag har använt WordPress som en blogg, men jag har aldrig själv programmerat med hjälp av ett.
(Förutom det vi använde i oophp då...)

Saker som dependency injection och service locator är helt nya för mig, men jag har ändå fått ganska bra klarhet i hur dessa fungerar och vad det innebär.
Principen med MVC har jag heller aldrig kommit i kontakt med, mer än att jag vetat vad förkortningen står för.
MVC ger för mig ett helt nytt sätt att tänka programmering på, eftersom jag tidigare var den som lade allt i samma påse, med gränsnitt, logik och bearbetning i samma kod.
Det Anax vi använde i oophp var enkelt att både använda och förstå, men det hade sina begränsningar (t.ex. så var det svårt att ha olika utseende på olika sidor).
Anax-MVC ser dock mycket mer komplett och kraftfullt ut, och detta innebär givetvis ochså att det kommer vara svårare att få grepp om fullt ut.

Git var också en ny bekantskap men guiden var en bra start för detta.
Jag har laddat upp mitt Anax-MVC [här](https://github.com/Racetrac/Anax-MVC)

Jag använder jEdit som texteditor, Filezilla för att föra över filer till driftservern och XAMPP som lokal webserver. Allt detta körs på Mac OS X 10.10. 
