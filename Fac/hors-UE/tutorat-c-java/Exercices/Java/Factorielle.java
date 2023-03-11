package Java;

public class Factorielle {

    static int facto (int N) {

        int result = 0;

        if (N < 2) {
            result = 1;
        }

        else {
            result = N*facto(N-1);
        }

        return result ;
    }

    public static void main(String[] args) {
        int N = Integer.parseInt(args[0]);
        System.out.println(facto(N));
        
    }
    
}
