ARG MARIADB_VERSION=11.2

##########################################################
#                     The base image                     #
##########################################################
# Use the specified MediaWiki version as the base image
FROM mariadb:${MARIADB_VERSION} AS mariadb


##########################################################
#             Create a run stage for MariaDB             #
##########################################################
FROM mariadb AS mariadb_run_stage
# Copy database initialization entrypoint scripts
COPY ./db_entrypoint /docker-entrypoint-initdb.d/

# Copy maintenance scripts to /usr/local/bin/maintenance and set permissions
COPY ./scripts /usr/local/bin/maintenance
RUN \
    # Set execute permissions for maintenance scripts
    chmod +x /usr/local/bin/maintenance/* \
    # Move maintenance scripts to /usr/local/bin
    && mv /usr/local/bin/maintenance/* /usr/local/bin \
    # Remove the temporary maintenance directory
    && rmdir /usr/local/bin/maintenance
