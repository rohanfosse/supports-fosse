#include <stdio.h>
#include <unistd.h> 
#include <ncurses.h>

int main()
{
    WINDOW *vin;

    initscr();

    vin=newwin(0,0,10,20);

    box(vin, '*', '*');
   
    wrefresh(vin);
    sleep(3); // dormir pendant 3 secondes
    delwin(vin);
    

    return(0);
}



  
