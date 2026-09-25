#!/bin/bash

# ============================================================
#  sync.sh — Sincronización con GitHub
#  Repositorio: AdrianRuiz06/Desarrollo-Web-en-Entorno-Servidor
# ============================================================

REPO_DIR="$(cd "$(dirname "$0")" && pwd)"
cd "$REPO_DIR"

echo ""
echo "🔄  Sincronizando con GitHub..."
echo "📁  Carpeta: $REPO_DIR"
echo ""

# 1. Traer cambios del instituto (pull)
echo "⬇️  Trayendo cambios remotos (git pull)..."
git pull origin main
if [ $? -ne 0 ]; then
  echo ""
  echo "❌  Error al hacer pull. Revisa conflictos antes de continuar."
  exit 1
fi

# 2. Ver si hay cambios locales para subir
if [ -z "$(git status --porcelain)" ]; then
  echo ""
  echo "✅  Todo está al día. No hay cambios nuevos que subir."
  exit 0
fi

echo ""
echo "📝  Cambios detectados:"
git status --short

# 3. Pedir mensaje de commit
echo ""
read -p "✏️  Escribe un mensaje para el commit (o pulsa ENTER para usar la fecha): " MSG
if [ -z "$MSG" ]; then
  MSG="Cambios - $(date '+%Y-%m-%d %H:%M')"
fi

# 4. Add, commit y push
git add .
git commit -m "$MSG"
git push origin main

if [ $? -eq 0 ]; then
  echo ""
  echo "✅  ¡Subido correctamente a GitHub! 🚀"
else
  echo ""
  echo "❌  Error al hacer push. Puede que necesites autenticarte."
  echo "    Asegúrate de tener un Personal Access Token configurado."
fi
echo ""
