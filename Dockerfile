FROM debian:buster

COPY srcs /temp/

RUN bash /temp/apt_get.sh && \
	bash /temp/setup.sh

EXPOSE 80 443

ENTRYPOINT ["bash", "/srcs/start.sh"]

CMD ["tail -f", "/dev/null"]