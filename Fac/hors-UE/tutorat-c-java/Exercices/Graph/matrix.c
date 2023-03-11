#include <stdio.h>
#include <stdlib.h>
#include <unistd.h>

int **matrix_f(int nb_cols, int nb_rows)
{
  fprintf(stdout,"Matrix function\n");
  srand(getpid());
  
  int **matrix = (int **)malloc(nb_cols*sizeof(int *));
  for(int i = 0 ; i < nb_cols ; i++)
    matrix[i] = (int *)malloc(nb_rows*sizeof(int *));
    
  for(int i = 0 ; i < nb_cols ; i++)
    for(int j = 0 ; j < nb_rows ; j++)
      matrix[i][j] = rand(); 
      
  fprintf(stdout,"Matrix function : exit\n");

  return matrix;
}

/* crée un matrice de taille nb_cols*nb_rows
et la remplit d'entiers choisis aléatoirement */