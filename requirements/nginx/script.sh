#!/bin/bash

openssl req -new -nodes \
    -keyout /etc/ssl/private/sendo.42.fr.pem \
    -out /etc/ssl/certs/sendo.42.fr.pem \
    -subj "/C=JP/ST=Tokyo/O=42Tokyo/CN=sendo.42.fr" \
    -x509 -days 3

echo "127.0.0.1 sendo.42.fr" >> /etc/hosts

exec nginx -g "daemon off;"