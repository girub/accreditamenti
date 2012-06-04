Flash Messages
==============

In createAction() dopo avere salvato i dati imposto il mio messaggio che voglio vedere

:: 

             // Salvo i dati nel db
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            // Imposto il flash message
            $this->get('session')->setFlash('notice', 'Congresso creato con successo');

a questo punto mi bastera andare nel template twig e mettere questo codice 
dove vogliamo visualizzare il messaggio

:: 

        {% if app.session.hasFlash('notice') %}
            <div class="flash-notice">
                {{ app.session.flash('notice') }}
            </div>
        {% endif %}


PS.
Ricordiamo che è meglio inserire il codice dentro il template base 
in questo tutti i template si estendo da quello.