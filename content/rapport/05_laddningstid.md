---
---
# Rapport: Laddningstider

Jämnförelse av laddningstider
=======================

Denna uppgift utgör en del av kursmoment fem i kursen design. Uppgiften baseras på att analysera laddningstider för tre hemsidor och sedan jämnföra dessa för att kunna ge en analys om förbättringar som kan implementeras i websidorna.

Urval
-----------------------

Jag såg inga större begränsningar av val av sidor. Därför har det blivit sidor som för mig själv personligen haft en tilltalande design eller som jag besöker ofta och har vana ögon med. Rapporten kommer att begränsas till tre stycken sidor vilka är: [CDON](https://cdon.com), [Ginza](https://ginza.com) och [Bengans](https://bengans.com/).

Metod
-----------------------

Som verktyg har jag använt [Pagespeed Insight](https://developers.google.com/speed/pagespeed/insights/?hl=sv), det är ett verktyg som tillhör google. Man mäter sidors laddningstid och utefter informationen man fått kan man se vart förbättringar på en sida kan göras. Det var även krav på att spara information i ett excelark med laddningstider och storlek på sidorna. Detta kompletterades med att använda inspektören i chrome för att få en djupgående info.

Resultat
-----------------------


#### CDON

CDON är en e-handel som expanderats stort sedan de öppnade portarna 1999. Det säljs i princip allt på sidan som till en början hade fokus på CD-skivor och DVD-filmer. Startsidan till CDON har en storlek om 5MB, det tar ungefär 3 sekunder att ladda in sidan. Vilket är helt okej med tanke på webplatsens storlek och antalet objekt som behövs ritas upp. Men det finns utrymme för förbättringar. Ett exempel är att inte ladda in bilder som inte används i sidan vid första anblick. Detta hade sparat på användarens bandbredd och resurser vilket gör att helhetsupplevelsen blir bättre. Som en responsiv sida på datorn funkar den lite halvdant. Om man laddat om sidan i mobil-storlek så skalas detta inte upp vid en användning i dator-läge.

[![Discogs start](image/rapporter/cdon.jpg?w=c8)](image/rapporter/cdon.jpg)

*Startsidan på cdon.com*




####Ginza

Ginza är likt CDON en av Sveriges största e-handelsbutiker. Det grundades redan 1968 men då som postorderföretag för vinylskivor och kassettband. Även Ginza har fått expandera med andra varor under tiden för att hänga med i konkurrensen. Ginza's webbplats har en storlek på 5MB och sidan tar ungefär 4 sekunder att ladda in allt material. Totalt en sekund mer än cdon, dock så är layouten på Ginza betydligt mer lättnavigerad än CDON's.

[![ginza](image/rapporter/ginza.png?w=c8)](image/rapporter/ginza.png)

*Startsida för ginza*


####Bengans

Bengans är en e-handel men med en större fokus på musik och merch från artister. Här finns allt från obskyr rock till top-100 listans senaste stjärnskott. Det känns som en mer genuin handelsplats än de andra två då Bengans har riktat in sig på ett spår. Sidans storlek ligger på 3,<2MB, lite mer än hälften mot de andra. Vilket gör att laddningstiderna blir mindre och ligger på 1,65 sekunder för att läsa in webplatsen.


[![Bengans](image/rapporter/bengans.png?w=c8)](image/rapporter/bengans.png)

*Startsida för Bengans*


Analys
-----------------------

De webbplatser som har varit med i rapporten har e-handel som en röd tråd. Även förbättringarna har haft en gemensam karaktär, där bilderna som laddas in både borde storleksanpassats och gjorts om till modernare format. En klar vinnare i testet är Bengans, men det känns inte riktigt rätt. Då de andra sidorna har betydligt mer information att ladda in och arbeta med. I övrigt så klagar pagespeed på att textkomprimering som används i de större webbplatserna tar en lång tid att ladda in och borde kunna förbättras. Responsivt så funkar webplatserna fantastiskt, det är bara CDON som har ett litet problem. Laddar man in sidan i responsivt läge på datorn så stannar samtliga regioner och ikoner i samma layout som en mobilversion, även om man förstorar till fullstorlek.

Resultat
-----------------------

[Excel-ark med jämnförelser](https://docs.google.com/spreadsheets/d/114cPBAh8sZbQA8F3W38_scXghq1W9OaISsKlMiWZicA/edit#gid=0)

I bifogat excelark ligger jämförelser från samtliga sidor med de kategorier som varit relevanta. Bengans är en solklar vinnare i testet med Ginza som en stark tvåa. CDON kommer sist av de tre, laddningstiderna var horribla på vissa undersidor vilket skapar en frustration för användaren. Att sätta en minimumgräns för en websidas laddningstid tycker jag är svårt. Då alla sidor inte har samma förutsättningar samt att informationen på webplatsen är det relevanta. Är det något som man besöker dagligen kan det ha en större påverkan då det är en "rutin", skulle säga att en laddningstid på 5-6 sekunder känns acceptabel då.

Rapport skriven av Johan Gistorp
