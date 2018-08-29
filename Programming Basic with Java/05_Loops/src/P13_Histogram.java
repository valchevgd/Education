import java.util.Scanner;

public class P13_Histogram {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        int num = Integer.parseInt(input.nextLine());
        double counterUnder200 = 0;
        double counter200To399 = 0;
        double counter400To599 = 0;
        double counter600To799 = 0;
        double counterOver800 = 0;

        for (int i = 0; i < num; i++) {
            double nextNum = Double.parseDouble(input.nextLine());

            if (nextNum < 200){
                counterUnder200 ++;
            }else if (nextNum < 400){
                counter200To399 ++;
            }else if (nextNum < 600){
                counter400To599 ++;
            }else if (nextNum < 800){
                counter600To799 ++;
            }else {
                counterOver800 ++;
            }
        }

        System.out.printf("%.2f%%%n", counterUnder200 / num * 100.0);
        System.out.printf("%.2f%%%n", counter200To399 / num * 100.0);
        System.out.printf("%.2f%%%n", counter400To599 / num * 100.0);
        System.out.printf("%.2f%%%n", counter600To799 / num * 100.0);
        System.out.printf("%.2f%%%n", counterOver800 / num * 100.0);
    }
}
