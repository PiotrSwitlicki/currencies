Założenia:
- aplikacja na symfony 5 lub najnowszy Laravel
- najnowsza możliwa wersja PHP
- mariadb/mysql jedna z nowszych (zależnie jaką ma Pan zainstalowaną lokalnie)
Proszę o wykonanie zadania wg. instrukcji:
1. Założenie prywatnego repozytorium kodu na github + przydzielenie dostępu na maila
osoby, która będzie weryfikować jego wykonanie od strony technicznej –
karol.szabat@innovationsoftware.pl
(proszę o wykonanie tego na początku realizacji zadania)
2. Uruchomienie czystej instancji aplikacji z wybranym frameworkiem + commit z git init.
3. Wygenerowanie encji Currency z polami (wielkości pól w bazie proszę pobrać na
podstawie własnych preferencji/doświadczeń):
- id - uuid
- name - string - nazwa waluty
- currency_code - string -
- exchange_rate - proszę dobrać typ wg. własnych doświadczeń - wartość kursu waluty
względem złotówki (czyli np. dla EURO będzie to np. 1 Euro = 4,75 PLN, czyli chcemy w
bazie mieć wartość 4,75 lub np. 475 (w zależności od podejścia))
4. Przygotowanie integracji z API NBP - http://api.nbp.pl/
a) integracja powinna połączyć się z API NBP i pobrać dane o aktualnych kursach walut (z
tabeli A)
b) jeżeli dana waluta już istnieje, to powinna zostać zaktualizowana wartość exchange_rate
c) jeżeli dana waluta nie istnieje, powinna zostać dodana
Mile widziane jest w miarę częste commitowanie zmian, razem z odpowiednim opisem
commitów.
Prośba także o zachowanie odpowiedniego podziału kodu na osobne Service’y.
Zadanie powinno zająć max. 3h, licząc od pierwszej do ostatniej modyfikacji.
Gdyby zadanie już na wstępie miało zająć więcej niż 3h, proszę o wykonanie samego
elementu integracji z API NBP w czystym PHP. Jeżeli to także szacuje Pan na >3h, proszę o
informację.
Kod po wykonaniu pozostaje oczywiście Pana własnością i nie będzie używany komercyjnie -
ma na celu tylko sprawdzenie Pana umiejętności.

Proszę o informację:
1. W jakiej części jest Pan w stanie podjąć się tego zadania?
2. Na kiedy jest Pan w stanie wykonać to zadanie?
3. Czy na tym etapie ma Pan jakieś pytania? Jeśli tak, proszę o ich przesłanie.
