import java.util.Arrays;
import java.util.List;
import java.util.Scanner;
import java.util.stream.Collectors;

public class P12_BombNumbers {

    public static void main(String[] args) {

        Scanner scanner = new Scanner(System.in);

        List<Integer> numbers = Arrays
                .stream(scanner.nextLine().split(" "))
                .map(Integer::parseInt)
                .collect(Collectors.toList());

        String[] tokens = scanner.nextLine().split(" ");
        int bomb = Integer.parseInt(tokens[0]);
        int power = Integer.parseInt(tokens[1]);


        for (int i = 0; i < numbers.size(); i++) {

            if (numbers.get(i) == bomb) {

                explosion(i, power, numbers);
                i = Math.max( i - (power + 1), 0);
            }
        }

        int output = getSum(numbers);

        System.out.println(output);
    }

    private static int getSum(List<Integer> numbers) {

        int sum = 0;

        for (int number : numbers) {

            sum += number;
        }

        return sum;
    }

    private static void explosion(int bombIndex, int power, List<Integer> numbers) {

        int startingIndex = Math.max(0, bombIndex - power);
        int lastIndex = Math.min(numbers.size() - 1, bombIndex + power);

        for (int i = lastIndex; i >= startingIndex; i--) {

            numbers.remove(i);
        }
    }
}
