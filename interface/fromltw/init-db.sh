#!/bin/bash
rm .\\database.db
sqlite3 -batch -init .\\database.sql .\\database.db <<'END_SQL'
END_SQL