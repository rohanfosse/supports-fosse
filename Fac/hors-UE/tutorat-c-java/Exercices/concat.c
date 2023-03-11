#include<stdio.h>
#include<stdlib.h>
#include<string.h>



// Que se passe-t-il si on essaye de rentrer plus que 4 arguments ? Comment est-ce-que je pourrai faire ? Si je souhaite concatener 100 arguments par exemple ?
int main(int argc, const char *argv[])
{
if (argv[1] != "-l" || "-c") // Très bien
    {
        printf("Veuillez préciser un argument");
        exit(1);
    }

char *string1 ;
char *string2 ;
char *string3 ;
char *string4 ;
char *concatString ;

size_t fullSize ;

string1 = argv[2] ;
string2 = argv[3];
string3 = argv[4];
string4 = argv[5];

//Longueur de la chaîne concaténée
fullSize = strlen(string1) + strlen(string2) + strlen(string3) + strlen(string4); // Comment automatiser cette partie ?

//Memory allocation
concatString = (char *)malloc(fullSize*sizeof(char)); // Très bien

//Copie dans concatString
strcpy(concatString, string1);
strcat(concatString, string2);
strcat(concatString, string3);
strcat(concatString, string4); // Idem, comment automatiser ?

//Affichage du resultat pour le mode concatenation
if (argv[1] == "-c")
    {
        printf("%s\n", concatString);
    }

//Affichage du resultat pour le mode longueur
if(argv[1] == "-l") // Attention, problème de parenthèse ici 
    {
        printf("%lu\n", fullSize);
    }

free(concatString); // Très bien

    return 0;
}

