import java.util.Arrays;
import java.util.Scanner;

public class P15_MagicSum {

    public static void main(String[] args) {

        Scanner scanner = new Scanner(System.in);

        int[] array = Arrays
                .stream(scanner.nextLine().split(" "))
                .mapToInt(Integer::parseInt)
                .toArray();

        int num = scanner.nextInt();

        final int length = array.length - 1;

        for (int i = 0; i < length; i++) {

            for (int j = i + 1; j < length + 1; j++) {

                if (array[i] + array[j] == num) {

                    System.out.printf("%d %d%n", array[i], array[j]);
                }
            }
        }
    }
}
