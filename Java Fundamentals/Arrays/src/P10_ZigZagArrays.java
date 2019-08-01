import java.util.Arrays;
import java.util.Scanner;
import java.util.stream.Collectors;

public class P10_ZigZagArrays {

    public static void main(String[] args) {

        Scanner scanner = new Scanner(System.in);

        int num = scanner.nextInt();

        int[] firstArray = new int[num];
        int[] secondArray = new int[num];

        for (int i = 0; i < num; i++) {

            if (i % 2 == 0) {

                firstArray[i] = scanner.nextInt();
                secondArray[i] = scanner.nextInt();
            } else {

                secondArray[i] = scanner.nextInt();
                firstArray[i] = scanner.nextInt();
            }
        }

        System.out.println(Arrays
                .stream(firstArray)
                .mapToObj(String::valueOf)
                .collect(Collectors.joining(" ")));

        System.out.println(Arrays
                .stream(secondArray)
                .mapToObj(String::valueOf)
                .collect(Collectors.joining(" ")));
    }
}
