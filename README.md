[![Stand With Ukraine](https://raw.githubusercontent.com/vshymanskyy/StandWithUkraine/main/banner2-direct.svg)](https://vshymanskyy.github.io/StandWithUkraine/)

# Symfony LDAP Authenticator Example 📱💬

This project provides an example implementation of the [symfony security bundle][1] with [ldap][2] as the user provider.

## Preparations

```bash
composer install
```

## Run the application

```bash
docker-compose up -d
symfony server:start -d
```

[1]: https://symfony.com/doc/current/security.html
[2]: https://symfony.com/doc/current/security/ldap.html#security-ldap-user-provider