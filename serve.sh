#!/usr/bin/env bash
set -euo pipefail

# Always operate from the repo root so router.php can be found reliably
cd "$(dirname "$0")"

host=${HOST:-localhost}
port=${PORT:-8000}

printf "Starting PHP built-in server at http://%s:%s using router.php\n" "$host" "$port"
php -S "$host:$port" router.php
