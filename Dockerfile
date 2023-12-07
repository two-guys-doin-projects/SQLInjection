FROM walkowiczf/sqlinjection:doaflipv2
LABEL authors="FilipUrban"
RUN ["mkdir", "opt/lampp/htdocs/sqlinjection"]
COPY ./php /opt/lampp/htdocs/sqlinjection