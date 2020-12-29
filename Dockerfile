FROM debian:buster

COPY srcs /temp/

ARG DEBIAN_FRONTEND=noninteractive

RUN bash /temp/apt_get.sh && \
	bash /temp/setup.sh

EXPOSE 80 443

ENTRYPOINT ["bash", "/temp/start.sh"]

CMD ["tail -f", "/dev/null"]