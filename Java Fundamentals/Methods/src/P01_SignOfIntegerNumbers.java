import java.util.Scanner;

public class P01_SignOfIntegerNumbers {

    public static void main(String[] args) {

        Scanner scanner = new Scanner(System.in);

        int num = scanner.nextInt();

        printSign(num);
    }

    private static void printSign(int num) {

        String sign = "zero";

        if (num > 0) {

            sign = "positive";
        } else if(num < 0) {

            sign = "negative";
        }

        System.out.printf("The number %d is %s.", num, sign);
    }
}
