import java.util.Arrays;
import java.util.Scanner;

public class P07_CondenseArrayToNumber {

    public static void main(String[] args) {

        Scanner scanner = new Scanner(System.in);

        int[] input = Arrays
                .stream(scanner.nextLine().split(" "))
                .mapToInt(Integer::parseInt)
                .toArray();
        int sum;

        if (input.length > 1) {

            sum = getSum(input);
        } else {

            sum = input[0];
        }

        System.out.println(sum);
    }

    private static int getSum(int[] array) {

        int[] temp = new int[array.length - 1];

        for (int i = 0; i < temp.length; i++) {

            temp[i] = array[i] + array[i + 1];
        }

        if (temp.length == 1) {

            return temp[0];
        }

        return getSum(temp);
    }
}
