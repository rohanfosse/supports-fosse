#include<stdlib.h>
#include<stdio.h>


typedef struct list_int
{
    int value;
    struct list_int* next;
}Slist;

Slist* init(int val){
    Slist* new = malloc(sizeof(Slist));
    new->value = val;
    new->next = NULL;
    return new;
}

Slist* ajouter_suivant(Slist* l,int new_val){
    Slist* a_ajouter = init(new_val);
    l -> next = a_ajouter;
    return l;
}

void print_list(Slist* l){
    Slist* tmp = l;
    while(tmp != NULL){
        printf("%d ",tmp->value);
        tmp = tmp->next;
    }
}

// add list resursive

Slist* ajouter_suivant_rec(Slist* l,int new_val){
    if(l->next == NULL){
        Slist* aAjouter = init(new_val);
        l->next = aAjouter;
        return l;
    }
    ajouter_suivant_rec(l->next,new_val);
    return l;
}

// print list rexursive

void print_list_rec(Slist* l){
    if(l == NULL){
        return;
    }
    printf("%d ",l->value);
    print_list_rec(l->next);
}

void ajouter_fin(Slist* l,int new_val){
    Slist* tmp = l;
    while(tmp->next != NULL){
        tmp = tmp->next;
    }
    ajouter_suivant(tmp,new_val);
}

void get(Slist* l,int index){
    Slist* tmp = l;
    for(int i = 0; i < index; i++){
        tmp = tmp->next;
    }
    printf("%d",tmp->value);
}

int main(int argc, char const *argv[])
{
    Slist* l = init(1);
    l = ajouter_suivant(l,2);
    l = ajouter_suivant(l,3);
    print_list(l);
    return 0;
}
