import java.util.Scanner;

public class P19_FactorialDivision {

    public static void main(String[] args) {

        Scanner scanner = new Scanner(System.in);

        int firstInt = scanner.nextInt();
        int secondInt = scanner.nextInt();

        printFactorialDivision(firstInt, secondInt);
    }

    private static void printFactorialDivision(int firstInt, int secondInt) {

        long firstFactorial = getFactorial(firstInt);
        long secondFactorial = getFactorial(secondInt);
        double result = (firstFactorial * 1.0) / (secondFactorial * 1.0);

        System.out.printf("%.2f", result);
    }

    private static long getFactorial(int num) {

        if (num == 0) {

            return 1;
        }

        if (num <=2) {

            return num;
        }

        long factorial = num;

        while (num > 1) {

            factorial *= --num;
        }

        return factorial;
    }
}
