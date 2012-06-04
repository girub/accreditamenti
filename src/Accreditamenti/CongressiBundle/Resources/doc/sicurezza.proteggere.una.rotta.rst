Proteggere una rotta
====================

Quando vogliamo proteggere una rotta dall'accesso di un utente. Possiamo
intervenire nel security.yml. In questo caso diciamo che la rotta

::

    /congresso/new

sarà accessibile solo se l'utente ha un ruolo maggiore o uguale a **ROLE_USER**.

::

    security:
        access_control:
            - { path: ^/congresso/new, role: ROLE_USER }