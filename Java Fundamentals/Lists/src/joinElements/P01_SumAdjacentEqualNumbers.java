package joinElements;

import java.text.DecimalFormat;
import java.util.Arrays;
import java.util.List;
import java.util.Scanner;
import java.util.stream.Collectors;

public class P01_SumAdjacentEqualNumbers {

    public static void main(String[] args) {

        Scanner scanner = new Scanner(System.in);

        List<Double> numbers = Arrays
                .stream(scanner.nextLine().split(" "))
                .map(Double::parseDouble)
                .collect(Collectors.toList());

        int index = 0;

        while (index < numbers.size() - 1) {

            if (numbers.get(index).equals(numbers.get(index + 1))) {

                double sum = numbers.get(index) + numbers.get(index + 1);
                numbers.set(index, sum);
                numbers.remove(index + 1);
                index = 0;
            } else {
                index++;
            }
        }

        String output = joinElementsByDelimiter(numbers, " ");
        System.out.println(output);
    }

    private static String joinElementsByDelimiter(List<Double> numbers, String delimiter) {

        String output = "";

        for (Double number : numbers) {
            output += (new DecimalFormat("0.#").format(number) + delimiter);
        }

        return output;

    }

}
