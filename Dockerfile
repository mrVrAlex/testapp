FROM gliderlabs/alpine:3.3
WORKDIR /var/www/current
VOLUME /var/www/current
ADD . .
COPY entrypoint.sh /entrypoint.sh
RUN apk add --no-cache --update bash
ENTRYPOINT ["/entrypoint.sh"]
CMD ["echo", "hello"]