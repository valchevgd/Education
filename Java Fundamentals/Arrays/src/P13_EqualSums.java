import java.util.Arrays;
import java.util.Scanner;

public class P13_EqualSums {

    public static void main(String[] args) {

        Scanner scanner = new Scanner(System.in);

        int[] array = Arrays
                .stream(scanner.nextLine().split(" "))
                .mapToInt(Integer::parseInt)
                .toArray();

        String output = "0";

        if (array.length > 1) {

            boolean areEquals = false;

            for (int i = 0; i < array.length; i++) {

                int leftSum = 0;
                int rightSum = 0;

                for (int j = i - 1; j >= 0; j--) {

                    leftSum += array[j];
                }

                for (int j = i + 1; j < array.length; j++) {

                    rightSum += array[j];
                }

                if (leftSum == rightSum) {

                    output = String.valueOf(i);

                    areEquals = true;
                    break;
                }
            }

            if (!areEquals) {

                output = "no";
            }
        }

        System.out.println(output);
    }
}
