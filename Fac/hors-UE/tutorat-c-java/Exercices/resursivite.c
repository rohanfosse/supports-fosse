#include <stdio.h>


// Compute the factoriel in a recursive way
int factoriel(int n){
    if(n == 0){
        return 1;
    }
    return n * factoriel(n-1);
}


// Compute fibonacci in a recursive way

int fibonacci(int n){
    if(n == 0){
        return 0;
    }
    if(n == 1){
        return 1;
    }
    return fibonacci(n-1) + fibonacci(n-2);
}

// Compute the sum of the digits of a number

int sum_digits(int n){
    if(n < 10){
        return n;
    }
    return n%10 + sum_digits(n/10);
}

// Compute the len of a string

int len(char* s){
    if(*s == '\0'){
        return 0;
    }
    return 1 + len(s+1);
}

// Compute the sum of an array

int sum_array(int* array,int len){
    if(len == 0){
        return 0;
    }
    return array[0] + sum_array(array+1,len-1);
}

int main(int argc, char const *argv[])
{
    printf("%d\n",factoriel(5));
    printf("%d\n",fibonacci(5));
    return 0;
}

