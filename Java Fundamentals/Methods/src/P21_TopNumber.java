import java.util.Scanner;

public class P21_TopNumber {

    public static void main(String[] args) {

        Scanner scanner = new Scanner(System.in);

        int num = scanner.nextInt();

        printTopNumbers(num);
    }

    private static void printTopNumbers(int num) {

        for (int i = 0; i < num; i++) {

            boolean isDivisibleToEight = divisibleByEight(String.valueOf(i));
            boolean isContainOddDigit = checkForOddDigit(String.valueOf(i));

            if (isDivisibleToEight && isContainOddDigit) {

                System.out.println(i);
            }
        }
    }

    private static boolean checkForOddDigit(String n) {

        final int loopLength = n.length();

        for (int i = 0; i < loopLength; i++) {

            if ((n.charAt(i) - 48) % 2 != 0) {

                return true;
            }
        }

        return false;
    }

    private static boolean divisibleByEight(String n) {

        int result = 0;
        final int loopLength = n.length();

        for (int i = 0; i < loopLength; i++) {

            result += n.charAt(i) - 48;
        }

        return result % 8 == 0;
    }
}
