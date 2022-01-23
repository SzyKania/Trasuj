FROM nginx:1.17.8-alpine

# verify modified configuration
RUN dpkg-reconfigure --frontend noninteractive locales
# Copy the public directory
# COPY ./public/ /app/public/
COPY . /app/

# Copy the nginx config file
COPY ./docker/nginx/nginx.conf /etc/nginx/conf.d/default.conf
