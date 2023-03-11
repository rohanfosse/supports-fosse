#include <stdio.h>
#include <stdlib.h>



void graph_f(int **matrix,int arg1, int arg2)
{
  fprintf(stdout,"Graph function\n");

  for(int i = 0 ; i < arg1 ; i++){
    for(int j = 0 ; j < arg2 ; j++)
      fprintf(stdout,"%i ",matrix[i][j]);
    fprintf(stdout,"\n");
  }
      
  fprintf(stdout,"Graph function : exit\n");
}

/* affiche dans la sortie standard 
une matrice de taille arg1*arg2 */