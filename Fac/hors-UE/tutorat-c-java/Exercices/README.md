# Exercices C

## Concaténation de chaines de caractères

Écrire dans un fichier **concat.c** un programme avec deux modes de fonctionnement :

- Mode concaténation. Le programme affiche sur la sortie standard la concaténation de ses arguments;
- Mode longueur. Le programme affiche sur la sortie standard le nombre de caractères (la longueur) de ses arguments.


Le mode de fonctionnement est sélectionné par un argument spécial. -c pour le mode concaténation et -l pour le mode longueur. Le mode sera le premier des arguments.

Exemple :

prog -c tata titi toto -tete
> tatatititoto-tete

prog -l tata titi toto -tete
> 17

prog tata titi toto -tete
> Veuillez préciser un mode.



Vous utiliserez les fonctions strlen, strcat, strcmp.

## Entrainement sur malloc

Ecrire un programme pour lire et imprimer un tableau d'entiers.
 Le programme doit tout d'abord demander le nombre d'éléments du tableau, puis demander à l'utilisateur de saisir les éléments du tableau, puis imprimer le tableau.

Utilisez l'allocation dynamique de mémoire pour allouer et désallouer la mémoire du tableau.

# Exercices Ncurses

## Le Rectangle

Écrire un programme qui affiche un rectangle de 10 lignes et 20 colonnes. Le rectangle doit être affiché en utilisant le caractère ‘*’.


