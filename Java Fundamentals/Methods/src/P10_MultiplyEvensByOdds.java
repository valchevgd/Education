import java.util.Arrays;
import java.util.Scanner;

import static java.lang.Integer.parseInt;

public class P10_MultiplyEvensByOdds {

    public static void main(String[] args) {

        Scanner scanner = new Scanner(System.in);

        int input = scanner.nextInt();
        
        int[] oddAndEvenSum = getOddAndEvenSum(Math.abs(input));

        System.out.println(oddAndEvenSum[0] * oddAndEvenSum[1]);
    }

    private static int[] getOddAndEvenSum(int input) {

        String array = Integer.toString(input);
        int oddSum = 0;
        int evenSum = 0;
        final int length = array.toCharArray().length;

        for (int i = 0; i < length; i++) {

            if ((array.charAt(i) - 48) % 2 == 0) {

                evenSum += array.charAt(i) - 48;
            } else {

                oddSum += array.charAt(i) - 48;
            }
        }

        return new int [] {oddSum, evenSum};

    }
}
