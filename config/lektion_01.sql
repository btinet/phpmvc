# Lektion 1

# Übung 1
# Gib alle Daten der Tabelle 'cia' aus.

select * from cia;

# Übung 2
# Gib die Namen aller Länder aus.

select name as Land from cia;

# Übung 3
# Gib alle Länder an, die mehr als 100 Millionen (1E08) Einwohner haben.

select name as Land from cia where einwohner > 1E08;

# Übung 4
# Gib die Länder an, die ein Bruttosozialprodukt (BIP) zwischen 1 und 100 Milliarden haben und in Asien liegen.

select name as Land from cia where bip between 1E09 and  1E12 and region = "Asien";

# Übung 5
# Gib die Einwohnerzahlen für Frankreich, Deutschland und Polen aus.

select name as Land, einwohner as Einwohner from cia where name ="Deutschland" or name ="Frankreich" or name ="Polen";

# Übung 6
# Zeige Name und Einwohnerzahl in Millionen für die Länder Südamerikas.

select name as Land, Einwohner, einwohner * 1E-06 as 'Einwohner in Millionen' from cia where region ="Südamerika";

# Übung 7
# Gib die Namen und das pro Kopf-Jahreseinkommen der Länder mit mehr als 200 Millionen Einwohnern aus.

select name as Land, bip / einwohner as 'pro Kopf-Jahreseinkommen' from cia where einwohner > 2*1E08;

# Übung 8
# Wie vorherige Aufgabe, allerdings sollen die Ergebnisse absteigend nach dem pro Kopf Jahreseinkommen sortiert werden.

select name as Land, bip / einwohner as 'pro Kopf-Jahreseinkommen' from cia where einwohner > 2*1E08 order by bip / einwohner desc;

# Übung 9
# In welchen Ländernamen kommt das Wort 'Vereinigte' vor?

select name as Land from cia where name like '%Vereinigte%';

# Übung 10
# Lasse Dir in alphabetischer Reihenfolge alle verschiedenen Regionen anzeigen.

select region as Region from cia group by region;
select distinct region as Region from cia region;

# Übung 11
# Zeige alle Länder, bei denen das Bruttoinlandsprodukt unbekannt ist.

select name as Land from cia where bip is null;