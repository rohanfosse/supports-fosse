# NCURSES

## Introduction

Curses est une bibliothèque qui offre des fonctionnalités de manipulation de l’écran. Il faut savoir que chaque console possède des caractéristiques qui lui sont propres (taille d’écran, vitesse d’affichage ...), de ce fait il est très difficile de réaliser des applications “portables” (qui vont d’un système à un autre). Curses nous fait le travail en nous proposant un large éventail de fonctions qui nous permettent de gérer l’écran.
Pour plus de détails sur ces fonctions, une documentation très fournie et très complète est disponible sur le Web.

Le principe de fonctionnement de Curses est un tableau de nLignes et nColonnes contenant d’une part tous les caractères de fenêtre de traitement mais aussi toutes les carcactéristiques de ces caractères. Tous ses renseignements sont enregistrés dans une structure nommée WINDOW. Afin d’optimiser au maximum les programmes tous les affichages sont bufferisés. Un changement ne sera actif que lorsque la commande *refresh()* est appelée. En attendant que cette commande soit appelée, les changements sont opérés dans l’image mémoire de la fenêtre (WINDOW).

Pour utiliser ncurses, il nécessaire:
1) d’inclure l’en-tête *ncurses.h*;
2) d'ajouter l'option *-lncurses* lors de la compilation.

## Un exemple : Hello World



```c
#include <stdlib.h>
#include <stdio.h>
#include <unistd.h>                  /*  pour la fonction sleep()  */
#include <curses.h>


int main(void) {

    WINDOW * mainwin;


    /*  Initialise ncurses  */

    if ( (mainwin = initscr()) == NULL ) {
	fprintf(stderr, "Error initialising ncurses.\n");
	exit(EXIT_FAILURE);
    }


    /*  Affiche " Hello, world ! " au centre de l'écran, appelle la fonction
	l'écran, appele refresh() pour montrer nos changements, et
	sleep() pendant quelques secondes pour obtenir l'effet plein écran.  */

    mvaddstr(13, 33, "Hello, world!");
    refresh();
    sleep(3);


    /*  Clean up après  */

    delwin(mainwin);
    endwin();
    refresh();

    return EXIT_SUCCESS;
}
```

## Quelques fonctions d’affichage de Curses

### Localisation du curseur
```move (y,x)``` permet de positionner le curseur sur l’écran.
 Bien entendu, ce positionnement ne sera effectif qu’après l’appel de la fonction *refresh*. Le coin haut gauche de la fenêtre possède les coordonnées (0,0).

### Affichage de caractères

```addch(char ch)``` affiche un caractère à la position courante du curseur.

 Certains caractères spéciaux donnent les résultats suivants :

| Caractère  | Nom  | Explication | 
| ------------ | ------------ | ------------ |
| \t | Tabulation | 8 caractères blancs |
| \r | Retour-Chariot |  Déplace le curseur sur la prochaine ligne |
| \b | Backspace | Ecrit un blanc en arrière |
| \n | Retour | Efface le reste de la ligne et déplace le curseur au début de la prochaine ligne |


### Effacement de la fenêtre
```clear()``` efface la fenêtre en la remplissant de blancs.


### Affichage d’une chaîne de caractères
```addstr(char* ch)``` affiche une chaîne de caractères.

Il est important de faire attention à ce que la chaîne ne dépasse pas la fin de la ligne. Si c’est le cas, la chaîne sera coupée et le reste sera affiché sur la ligne suivante.

### Affichage formaté d’une chaîne de caractères

```printw(...)``` est l’adaptation de printf pour l’affichage formaté de chaîne de caractères.

Exemple :
``
printw ("%s",chaine);
``

### Boîtes

Curses nous offre la fonction ```box(WINDOW *win, chtype verch, chtype horch)``` qui permet de dessiner une boîte autour de la fenêtre *win*. Les caractères *verch* et *horch* sont utilisés pour dessiner les lignes verticales et horizontales de la boîte.
 
Exemple :

```markdown
!=======================!
!box (stdscr, ’!’, ’=’);!
!=======================!

```

### Exemple d'application

```c

#include <stdio.h>
#include <curses.h>

int main () {
    initscr (); // Initialisation de Curses

    box (stdscr, ’|’, ’-’); // Dessin d’une boîte

    move (3,2); // Positionnement en 3,2


    addstr ("Quel superbe bibliothèque !"); // Affichage d’un message
    refresh (); // Application des changements

    getch (); // Attente, pour que l’on puisse voir !

    endwin (); // Fin de Curses

    return (0);
}
```

## Quelques fonctions de saisie de Curses

### Saisie d’un caractère

```getch()``` permet de saisir un caractère. Cette fonction est bloquante, c’est-à-dire qu’elle attend que l’utilisateur appuie sur une touche.

#### Exemple

```c

#include <stdio.h>
#include <curses.h>

int main () {
    char car;

    initscr (); // Initialisation de Curses

    box (stdscr, ’|’, ’-’); // Dessin d’une boîte

    move (3,2); // Positionnement en 3,2

    addstr ("Votre caractère : "); // Demande la saisie d’un caractère

    car = getch (); // Saisie du caractère

    move (4,2); // Positionnement en 4,2

    printw ("Caractère : %c", car); // Affiche le caractère saisi

    refresh (); // Affichage des modifications

    getch (); // Attente pour voir le résultat

    endwin (); // Fin de Curses

    return (0);
}
```

### Saisie d’une chaîne de caractères

```getstr(char* ch)``` permet de saisir une chaîne de caractères.

#### Exemple

```c    
#include <stdio.h>
#include <curses.h>

int main () {
    char chaine [256];
    initscr(); // Initialisation de Curses

    box(stdscr, ’|’, ’-’); // Dessin d’une boîte

    move(3,2); // Positionnement en 3,2

    addstr("Votre chaîne de caractère : "); // Demande la saisie d’un caractère

    getstr(chaine); // Saisie de la chaîne

    move(4,2); // Positionnement en 4,2

    printw("Chaine : %s", chaine); // Affiche le caractère saisi

    refresh(); // Affichage des modifications

    getch()); // Attente pour voir le résultat

    endwin(); // Fin de Curses

    return(0);
}
```

### Saisie formatée d’une chaîne de caractères

```scanw(...)``` est l’adaptation de scanf pour la saisie formatée de chaîne de caractères.

#### Exemple

```c
#include <stdio.h>
#include <curses.h>

int main () {
    int nbre = 0;

    initscr (); // Initialisation de Curses

    box (stdscr, ’|’, ’-’); // Dessin d’une boîte

    move (3,2); // Positionnement en 3,2

    addstr ("Votre nombre : "); // Demande la saisie d’un caractère

    scanw ("%d",&nbre); // Saisie du nombre

    move (4,2); // Positionnement en 4,2

    printw ("Nombre : %d", nbre); // Affiche le nombre saisi

    refresh (); // Affichage des modifications

    getch (); // Attente pour voir le résultat

    endwin (); // Fin de Curses
    
    return (0);
}
```

