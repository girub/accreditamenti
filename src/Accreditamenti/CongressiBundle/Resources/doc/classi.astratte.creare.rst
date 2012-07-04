==============================================================
Creare una classe astratta (perchè creare una classe astratta)
==============================================================

--------
Premessa
--------

Ho due o piu classi che condividono alcuni attributi e alcuni metodi.

=========================
Elenco delle cose da fare
=========================

#. Definiamo delle classi di base
#. Individuiamo gli attributi comuni
#. Creiamo una classe astratta

------------------------------
Definiamo delle classi di base
------------------------------

::

    class Romanzo {
        private $titolo;
        private $autore;
    }

    class Giallo {
        private $titolo;
        private $autore;
        private $colpevole;
    }

---------------------------------
Individuiamo gli attributi comuni
---------------------------------

::

    class <...> {
        private $titolo;
        private $autore;
    }

---------------------------
Creiamo una classe astratta
---------------------------

::

    abstract class Libro {
        protected $titolo;
        protected $autore;
    }

    class Romanzo extends Libro {
    }

    class Giallo extends Libro {
        private $colpevole;
    }