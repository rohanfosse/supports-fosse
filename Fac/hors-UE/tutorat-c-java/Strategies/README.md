# Les différentes stratégies

## Minimax

**Minimax** est une règle de décision utilisée en intelligence artificielle et en théorie des jeux pour minimiser la perte possible dans le cas d'un scénario le plus défavorable (perte maximale).

Lorsqu'il s'agit de gains, on parle de *maximin* - pour maximiser le gain minimum. 

La valeur *maximin* est la valeur la plus élevée que le joueur peut être sûr d'obtenir sans connaître les actions des autres joueurs ; de manière équivalente, c'est la valeur la plus basse que les autres joueurs peuvent forcer le joueur à recevoir lorsqu'ils connaissent l'action du joueur.

Sa définition formelle est la suivante:

$$ {\underline {v_{i}}}=\max _{a_{i}}\min _{a_{-i}}{v_{i}(a_{i},a_{-i})} $$

Où :

- i est l'indice du joueur qui nous intéresse.
- -i  désigne tous les autres joueurs sauf le joueur i.
- a~i~ est l'action entreprise par le joueur i.
- a~-i~ désigne les actions entreprises par tous les autres joueurs.
- v~i~ est la fonction de valeur du joueur i.

Dans les jeux à somme nulle à deux joueurs (ce qui est notre cas ici), la solution minimax est la même que l'équilibre de Nash ([plus d'info ici](https://fr.wikipedia.org/wiki/%C3%89quilibre_de_Nash)) .

Dans le contexte des jeux à somme nulle, le théorème du minimax est équivalent à :

    Pour tout jeu à somme nulle à deux personnes avec un nombre fini de stratégies,
    il existe une valeur V et une stratégie mixte pour chaque joueur, de sorte que

        (a) Étant donné la stratégie du joueur 2, le meilleur gain possible pour le joueur 1 est V, et
        (b) Étant donné la stratégie du joueur 1, le meilleur gain possible pour le joueur 2 est -V.

De manière équivalente, la stratégie du joueur 1 lui garantit un gain de V quelle que soit la stratégie du joueur 2, et de la même manière, le joueur 2 peut se garantir un gain de -V. Le nom minimax vient du fait que chaque joueur minimise le gain maximal possible pour l'autre - puisque le jeu est à somme nulle, ils minimisent également leur propre perte maximale (c'est-à-dire qu'ils maximisent leur gain minimal).


## Alpha-Beta

L'Alpha-Beta est une amélioration du Minimax. Il permet de réduire le nombre de noeuds à évaluer. Il s'agit d'une technique de coupure d'arbres. On coupe l'arbre dès qu'on a trouvé un noeud qui ne peut pas être amélioré par un autre noeud. On coupe donc l'arbre dès qu'on a trouvé un noeud qui maximise la valeur de la position finale.

## Monte-Carlo

Le Monte-Carlo est une technique de simulation de jeu. On simule un grand nombre de parties de jeu et on choisit le coup qui a le plus de chance de gagner.
