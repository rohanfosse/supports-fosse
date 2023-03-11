# Langage Makefile

# Je définis la variable de compilation C
CC = gcc
# paramétres à passer au compilateur C
CFLAGS = -Wall -g -O2 -std=c99
# nom de l'éxecutable principal à générer
EXEC = graph


# première règle explicite pour définir ce qui est fait par défaut
all: $(EXEC)

# Equivalent à graph: graph.o input.o matrix.o main.o
$(EXEC): graph.o input.o matrix.o main.o
	$(CC) -o $(EXEC) graph.o input.o matrix.o main.o $(FLAGS)

graph.o: graph.c
	$(CC) -o graph.o -c graph.c $(FLAGS)

input.o: input.c
	$(CC) -o input.o -c input.c $(FLAGS)

matrix.o: matrix.c
	$(CC) -o matrix.o -c matrix.c $(FLAGS)

main.o: main.c
	$(CC) -o main.o -c main.c $(FLAGS)

# Je crée un dossier exec et y déplace graph
install:
	mkdir exec ;\
	mv $(EXEC) exec

# Je supprime le dossier exec
uninstall:
	rm -rf exec

# Je supprime tous les fichiers .o et le fichier graph
clean: 
	rm -f *.o $(EXEC)

# La règle rmproper est équivalente dans ce cas
rmproper:
	rm -fr exec ;\
	rm -f *.o $(EXEC)

