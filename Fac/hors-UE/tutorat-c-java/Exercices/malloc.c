#include<stdlib.h>
#include<stdio.h>

void afficherTableau(int*tab, int tailleTableau)
{
    for (int i=0; i< tailleTableau; i++)
    {
        printf("%d \n", tab[i]) ;
    }

}



int main(int argc, char const *argv[])
{
int tailleTableau ;

printf("quelle est le nombre d'elements du tableau ?\n");
scanf("%d", &tailleTableau); // Il faut penser à ne pas mettre de \n dans le scanf, cela peut faire des bugs. Ici, cela demande de rentrer deux fois le meme nombre.

int* tab = malloc(tailleTableau*sizeof(int));


for (int i = 0; i < tailleTableau ; i++)
{
    printf("saisir l'element n° %d de type entier du tableau \n", i);
    scanf("%d", &tab[i]); // idem 
}

afficherTableau(tab, tailleTableau);

free(tab);

return 0;
}


