FROM alpine
WORKDIR /var/www/current
VOLUME /var/www/current
ADD . .
COPY entrypoint.sh /entrypoint.sh
RUN apk add --update bash && rm -rf /var/cache/apk/*
ENTRYPOINT ["/entrypoint.sh"]
CMD ["echo", "hello"]