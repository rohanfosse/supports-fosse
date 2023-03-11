# On défini la variable de compilation
CC = gcc
CFLAGS = -Wall -g -O2 -std=c99
EXEC = hello

# la règle all qui défini hello comme première règle à exécuter
all: hello

$(EXEC): hello.o main.o
	$(CC) -o $(EXEC) hello.o main.o $(CFLAGS)

hello.o: hello.c
	gcc -o hello.o -c hello.c $(CFLAGS)

main.o: main.c hello.h
	gcc -o main.o -c main.c $(CFLAGS)

# On crée un dossier exec et on y déplace hello
install:
	mkdir exec ;\
	mv $(EXEC) exec

#On supprime le dossier exec
uninstall:
	rm -rf exec

# On supprime tous les fichiers .o et le fichier hello
clean: 
	rm -f *.o $(EXEC)

# La règle rmproper est équivalente dans ce cas
rmproper:
	rm -fr exec ;\
	rm -f *.o $(EXEC)
	
# Language: makefile


