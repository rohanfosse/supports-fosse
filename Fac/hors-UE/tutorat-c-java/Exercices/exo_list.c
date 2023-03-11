#include <stdlib.h>
#include <stdio.h>


typedef struct list_int
{
    int value;
    struct list_int *next;
} Slist;

typedef struct Dlist_int
{

    char* value;
    struct Dlist_int *next;
    struct Dlist_int *prev;
} Dlist;




Slist *init(int val)
{
    Slist *l = malloc(sizeof(Slist));
    l->value = val;
    l->next = NULL;
    return l;
}

Slist *set_value(Slist *l, int val)
{
    assert(l != NULL);
    l->value = val;
    return l;
}

Slist* increment(Slist *l)
{
    assert(l != NULL);
    l->value++;
    return l;
}


int get_value(Slist *l)
{
    return l->value;
}


Slist *ajouter_suivant(Slist *l, int val)
{
    Slist *valeur_a_ajouter = init(val);
    l->next = valeur_a_ajouter;
    return l;
}

void afficher_liste(Slist *l)
{
    Slist *tmp = l;
    while (tmp != NULL)
    {
        printf("%d\n", tmp->value);
        tmp = tmp->next;
    }
}

int main(int argc, char const *argv[])
{
    Slist *maListe = init(0);
    ajouter_suivant(maListe, 1);
    afficher_liste(maListe);

    return 0;
}
