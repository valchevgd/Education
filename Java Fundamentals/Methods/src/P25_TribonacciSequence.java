import java.util.Arrays;
import java.util.Scanner;
import java.util.stream.Collectors;

public class P25_TribonacciSequence {

    public static void main(String[] args) {

        Scanner scanner = new Scanner(System.in);

        int num = scanner.nextInt();

        printTribonacciSequence(num);
    }

    private static void printTribonacciSequence(int num) {

        int[] numbers = new int[num];
        numbers[0] = 1;

        for (int i = 1; i < num; i++) {

            numbers[i] = getSum(numbers, i);
        }

        System.out.println(Arrays
                .stream(numbers )
                .mapToObj(String::valueOf)
                .collect(Collectors.joining(" ")));
    }

    private static int getSum(int[] numbers, int i) {

        int loopStart = Math.max(0, i - 3);

        int sum = 0;

        for (int j = loopStart; j < numbers.length ; j++) {
            sum += numbers[j];
        }

        return sum;
    }
}
