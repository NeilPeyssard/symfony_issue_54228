FROM nginx:1.25.3-alpine

COPY nginx.conf /etc/nginx/nginx.conf
COPY sites/default.conf /etc/nginx/sites-available/default.conf
COPY conf.d/default.conf /etc/nginx/conf.d/default.conf

CMD ["nginx"]
