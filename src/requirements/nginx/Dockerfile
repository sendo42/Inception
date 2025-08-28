FROM debian:bookworm

RUN apt update && apt upgrade && apt install -y \
    nginx openssl vim curl

COPY default /etc/nginx/sites-available/
COPY script.sh /usr/local/bin/script.sh

RUN chmod +x /usr/local/bin/script.sh


ENTRYPOINT ["/usr/local/bin/script.sh"]