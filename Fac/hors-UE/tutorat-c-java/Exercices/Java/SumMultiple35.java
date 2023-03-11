package Java;

public class SumMultiple35 {
    static int[] Multiples3(int N) {
        int[] tab3 = new int[N];
        for (int i = 0; i < N / 3; i++) {
            tab3[i] = 3 * i;
        }
        return tab3; // vscode dit la chose suivante : Type mismatch: cannot convert from int[] to
                     // int
    }

    static int[] Multiples5(int N) {
        int[] tab5 = new int[N];
        for (int i = 0; i < N / 5; i++) {
            tab5[i] = 5 * i;
        }
        return tab5; // vscode dit la chose suivante : Type mismatch: cannot convert from int[] to
                     // int
    }

    public static final void main(String[] args) {

        if (args.length != 1) { // NULL n'est pas une constante en Java
            System.err.println("error : missing argument !");
            System.exit(0); // Il manque un argument pour la fonction exit
        }

        int N = Integer.parseInt(args[0]);
        int sum = 0;
        int[] tab3 = Multiples3(N);
        int[] tab5 = Multiples5(N);

        for (int i = 0; i < tab3.length; i++) {
            sum = sum + tab3[i];
        }
        for (int i = 0; i < tab5.length; i++) {
            sum = sum + tab5[i];
        }

        System.out.print("The sum of the multiples of 3 and 5 below");
        System.out.print(N);
        System.out.print("is");
        System.out.println(sum);

    }
}