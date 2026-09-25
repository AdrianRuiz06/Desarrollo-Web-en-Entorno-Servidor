#!/bin/bash

# ============================================================
#  setup_xampp_link.sh
#  Crea un enlace simbólico de tu carpeta DWEC en htdocs de XAMPP
#  Ejecutar DESPUÉS de instalar XAMPP
# ============================================================

DWEC_PATH="/Users/adrian/Desktop/Instituto/DWEC"
HTDOCS="/opt/lampp/htdocs"
LINK_NAME="dwec"

echo ""
echo "🔗  Configurando XAMPP para tu proyecto DWEC..."
echo ""

# Verificar que XAMPP está instalado
if [ ! -d "$HTDOCS" ]; then
  echo "❌  No se encontró XAMPP en /opt/lampp/"
  echo "    Instala XAMPP primero desde: https://www.apachefriends.org/es/download.html"
  exit 1
fi

# Eliminar link anterior si existe
if [ -L "$HTDOCS/$LINK_NAME" ]; then
  echo "♻️  Eliminando enlace anterior..."
  sudo rm "$HTDOCS/$LINK_NAME"
fi

# Crear enlace simbólico
sudo ln -s "$DWEC_PATH" "$HTDOCS/$LINK_NAME"

if [ $? -eq 0 ]; then
  echo "✅  Enlace creado: $HTDOCS/$LINK_NAME → $DWEC_PATH"
  echo ""
  echo "🌐  Abre Apache en XAMPP y accede a:"
  echo "    http://localhost/dwec/"
  echo ""
else
  echo "❌  Error al crear el enlace simbólico."
fi
