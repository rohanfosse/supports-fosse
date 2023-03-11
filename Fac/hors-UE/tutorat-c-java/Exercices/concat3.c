#include<stdio.h>
#include<stdlib.h>
#include<string.h>


// Que se passe-t-il si on essaye de rentrer plus que 4 arguments ? Comment est-ce-que je pourrai faire ? Si je souhaite concatener 100 arguments par exemple ?
int main(int argc, const char *argv[])
{
// argv[0] correspond au nom de l'exécutable

// strcmp retourne 0 quand c'est égal
if ( strcmp(argv[1],"-l") != 0 && strcmp(argv[1],"-c") != 0 ) // Très bien
    {
        printf("Veuillez préciser un argument \n");
        exit(1);
    }


char *concatString ;
size_t fullSize = 0 ;



//Longueur de la chaîne concaténée
//fullSize = strlen(string1) + strlen(string2) + strlen(string3) + strlen(string4); // Comment automatiser cette partie ?

for (int i = 2; i < argc; i++)
{
    fullSize += strlen(argv[i]) ;
}

//Memory allocation
concatString = (char *)malloc(fullSize*sizeof(char)); // Très bien

/*Copie dans concatString
strcpy(concatString, string1);
strcat(concatString, string2);
strcat(concatString, string3);
strcat(concatString, string4); // Idem, comment automatiser ? */

//Copie dans concatString du premier string
strcpy(concatString, argv[2]);
//COncatenation dans concatString du string suivant
for (int i = 3; i < argc; i++)
{ 
   strcat(concatString, argv[i]);
}



//Affichage du resultat pour le mode concatenation
if (strcmp(argv[1],"-c") == 0)
    {
        printf("%s\n", concatString);
    }

//Affichage du resultat pour le mode longueur
if(strcmp(argv[1],"-l") == 0)
    {
        printf("%lu\n", fullSize);
    }

free(concatString); // Très bien

    return 0;
}

