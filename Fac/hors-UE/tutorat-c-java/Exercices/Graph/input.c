#include <stdio.h>
#include <stdlib.h>



int input_f(int arg1, int arg2)
{
  fprintf(stdout,"Input function\n");

  for(int i = 0 ; i < arg2 ; i++)
    arg1 += arg2;

  fprintf(stdout,"Input function : exit\n");

  return arg1;
}

// retourne le nombre d'entiers composant la matrice