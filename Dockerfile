FROM alpine
WORKDIR /var/www/current
VOLUME /var/www/current
ADD . .
COPY ./entrypoint.sh /entrypoint.sh
ENTRYPOINT ["/entrypoint.sh"]
CMD ["echo", "hello"]