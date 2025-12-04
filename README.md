# Auto Aber Klein – Kirby Site

Eine kompakte Kirby-Installation, die die Navigationsstruktur und Artikelverwaltung der Seite **autoaberklein.de** nachbildet.

## Entwicklung
1. Abhängigkeiten installieren (Kirby Core wird über Composer geladen):
   ```bash
   composer install
   ```
2. Lokalen Server starten, z. B. mit PHPs Built-in Server:
   ```bash
   php -S localhost:8000 kirby/router.php
   ```
3. Panel einrichten unter `http://localhost:8000/panel` und einen Admin-Benutzer anlegen.

## Inhalte pflegen
- Die Hauptnavigation ist über die Top-Level-Seiten „Unternehmen“, „Leistungen“, „Fahrzeuge“, „Aktuelles“ und „Kontakt“ abgebildet.
- Neue Artikel können im Panel unter der Seite **Aktuelles** angelegt werden (Blueprint `artikel`).
- Startseitenelemente wie Hero und Schwerpunkte sind als strukturierte Felder im Blueprint `home` gepflegt.

## Design
Ein klares, reduziertes Layout mit Fokus auf Lesbarkeit. Farben können in `assets/css/style.css` angepasst werden.
