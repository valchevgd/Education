import java.util.Scanner;

public class P11_PasswordGenerator {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        int a = Integer.parseInt(input.nextLine());
        char uppercase = input.nextLine().toUpperCase().charAt(0);
        char lowercase = input.nextLine().toLowerCase().charAt(0);
        int b = Integer.parseInt(input.nextLine());
        int c = Integer.parseInt(input.nextLine());
        int d = Integer.parseInt(input.nextLine());
        int n = Integer.parseInt(input.nextLine());
        int stop = 0;

        for (int i = 1; i <= a; i++) {

            for (int j = 'A' ; j <= uppercase; j++) {

                for (int k = 'a' ; k <= lowercase; k++) {

                    for (int l = 1; l <= b; l++) {

                        for (int m = 1; m <= c; m++) {

                            for (int o = 1; o <= d; o++) {
                                stop ++;
                                if (stop == n){
                                    System.out.println(String.format("%d%c%c%d%d%d", i, j, k, l, m, o));
                                    break;
                                }

                            }
                        }
                    }
                }
            }
        }

        if (stop < n){
            System.out.println("No password on this position");
        }
    }
}
