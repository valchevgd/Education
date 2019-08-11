import java.text.DecimalFormat;
import java.util.ArrayList;
import java.util.Arrays;
import java.util.List;
import java.util.Scanner;
import java.util.stream.Collectors;


public class P02_Gauss_Trick {

    public static void main(String[] args) {

        Scanner scanner = new Scanner(System.in);

        List<Integer> inputNumbers = Arrays
                .stream(scanner.nextLine().split(" "))
                .map(Integer::parseInt)
                .collect(Collectors.toList());

        List<Integer> outputNumbers = new ArrayList<>();

        final int LENGTH = inputNumbers.size() / 2;

        for (int i = 0; i < LENGTH; i++) {
            int sum = inputNumbers.get(i) + inputNumbers.get(inputNumbers.size() - 1 - i);
            outputNumbers.add(sum);
        }

        if (inputNumbers.size() % 2 != 0) {

            outputNumbers.add(inputNumbers.get(LENGTH));
        }

        String output = joinElementsByDelimiter(outputNumbers, " ");
        System.out.println(output);


    }

    private static String joinElementsByDelimiter(List<Integer> numbers, String delimiter) {

        String output = "";

        for (int number : numbers) {
            output += (new DecimalFormat("0.#").format(number) + delimiter);
        }

        return output;
    }
}
