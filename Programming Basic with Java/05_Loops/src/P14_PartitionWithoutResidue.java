import java.util.Scanner;

public class P14_PartitionWithoutResidue {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        int num = Integer.parseInt(input.nextLine());
        double counterOn2 = 0;
        double counterOn3 = 0;
        double counterOn4 = 0;

        for (int i = 0; i < num; i++) {
            double nextNum = Double.parseDouble(input.nextLine());

            if (nextNum % 2 == 0){
                counterOn2 ++;
            }
            if (nextNum % 3 == 0){
                counterOn3 ++;
            }
            if (nextNum % 4 == 0){
                counterOn4 ++;
            }
        }

        System.out.printf("%.2f%%%n", counterOn2 / num * 100.0);
        System.out.printf("%.2f%%%n", counterOn3 / num * 100.0);
        System.out.printf("%.2f%%%n", counterOn4 / num * 100.0);
    }
}
