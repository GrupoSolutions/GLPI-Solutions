#!/bin/bash

sendEmail -f suporte.ti@gruposolutions.com.br \
  -t suporte.ti@gruposolutions.com.br \
  -s smtplw.com.br:465 \
  -u "Backup GLPI $DATA_ATUAL" \
  -m "Backup GLPI efetuado com sucesso!" \
  -xu gruposolutions \
  -xp 'QizpwHwE7893' \
  -o tls=yes
