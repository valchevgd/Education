import java.lang.reflect.Array;
import java.util.Arrays;
import java.util.Scanner;

public class P06_Largest3_Numbers {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        int[] numbers = Arrays
                .stream(input.nextLine().split(" "))
                .mapToInt(Integer::parseInt)
                .toArray();

        Arrays.sort(numbers);

        for (int i = 0; i < Math.min(3, numbers.length); i++) {
            System.out.println(numbers[numbers.length - 1 - i]);
        }
    }
}
