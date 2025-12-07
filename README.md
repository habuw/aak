# Auto Aber Klein – Kirby Site

Eine kompakte Kirby-Installation, die die Navigationsstruktur und Artikelverwaltung der Seite **autoaberklein.de** nachbildet.

## Entwicklung
1. Abhängigkeiten installieren (Kirby Core wird über Composer geladen):
   ```bash
   composer install
   ```
   > Hinweis bei fehlendem Internet/Proxy-Problemen:
   > - Lade das aktuelle Kirby-Release von <https://github.com/getkirby/cms/releases> herunter.
   > - Entpacke den Ordner `kirby` nach `vendor/kirby/` (Pfad muss also `vendor/kirby/config/setup.php` enthalten).
   > - Lege einen passenden `vendor/autoload.php` aus einer funktionierenden Installation ab oder generiere ihn mit Composer.
   > - Starte den Server anschließend neu. Ohne diese Dateien liefert `index.php` einen Hinweisbildschirm statt einer Fatal Error Meldung.
2. Lokalen Server starten, z. B. mit PHPs Built-in Server:
   ```bash
   php -S localhost:8000 kirby/router.php
   ```
3. Panel einrichten unter `http://localhost:8000/panel` und einen Admin-Benutzer anlegen.

## Inhalte pflegen
- Die Hauptnavigation ist über die Top-Level-Seiten „Unternehmen“, „Leistungen“, „Fahrzeuge“, „Aktuelles“ und „Kontakt“ abgebildet.
- Neue Seiten können im Panel direkt in der Site-Blueprint angelegt werden; wähle die gewünschte Vorlage (z. B. **leistungen**, **fahrzeuge** oder **default**).
- Unter **Aktuelles** legst du Artikel mit dem Blueprint `artikel` an; diese erscheinen automatisch auf der Startseite und auf der Unterseite „Aktuelles“.
- Startseitenelemente wie Hero und Schwerpunkte sind als strukturierte Felder im Blueprint `home` gepflegt.

## Design & Struktur
- Navigations-Header, Footer und Grundlayout liegen in `site/snippets` und werden von allen Templates genutzt.
- Individuelle Darstellungen für Leistungen, Fahrzeuge, Aktuelles, Artikel und Kontakt befinden sich in `site/templates` mit passenden Blueprints unter `site/blueprints/pages`.
- Farben und Abstände lassen sich in `assets/css/style.css` anpassen.
