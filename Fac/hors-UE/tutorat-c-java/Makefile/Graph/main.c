#include <stdio.h>
#include <stdlib.h>
#include "input.h"
#include "graph.h"
#include "matrix.h"


int main(int argc, char *argv[]){

  int num ;
  int **matrix = NULL;
  
  num = input_f(atoi(argv[1]),atoi(argv[2]));
  matrix = matrix_f(num,num);
  graph_f(matrix,num,num);
    
  exit(EXIT_SUCCESS);
}
