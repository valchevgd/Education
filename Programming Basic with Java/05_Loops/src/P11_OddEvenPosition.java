import java.util.Scanner;

public class P11_OddEvenPosition {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        int num = Integer.parseInt(input.nextLine());

        double oddSum = 0;
        double oddMin = Double.MAX_VALUE;
        double oddMax = - 235012480;
        double evenSum = 0;
        double evenMin = Double.MAX_VALUE;
        double evenMax = - 235012480;

        for (int i = 1; i <= num; i++) {
            double nextNum = Double.parseDouble(input.nextLine());

            if (i % 2 != 0){
                oddSum += nextNum;
                if (nextNum > oddMax){
                    oddMax = nextNum;
                }
                if (nextNum < oddMin){
                    oddMin = nextNum;
                }
            }else {
                evenSum += nextNum;
                if (nextNum > evenMax){
                    evenMax = nextNum;
                }
                if (nextNum < evenMin){
                    evenMin = nextNum;
                }
            }
        }
        System.out.printf("OddSum=%f,%n", oddSum);
        if (oddMin == Double.MAX_VALUE){
            System.out.println("OddMin=No,");
        }else {
            System.out.printf("OddMin=%f,%n", oddMin);
        }
        if (oddMax == - 235012480){
            System.out.println("OddMax=No,");
        }else {
            System.out.printf("OddMax=%f,%n", oddMax);
        }
        System.out.printf("EvenSum=%f,%n", evenSum);
        if (evenMin == Double.MAX_VALUE){
            System.out.println("EvenMin=No,");
        }else {
            System.out.printf("EvenMin=%f,%n", evenMin);
        }
        if (evenMax == - 235012480){
            System.out.println("EvenMax=No");
        }else {
            System.out.printf("EvenMax=%f", evenMax);
        }
    }
}
