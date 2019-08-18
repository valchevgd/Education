import java.text.DecimalFormat;
import java.util.Arrays;
import java.util.Map;
import java.util.Scanner;
import java.util.TreeMap;

public class P01_CountRealNumbers {

    public static void main(String[] args) {

        Scanner scanner = new Scanner(System.in);

        double[] numbers = Arrays
                .stream(scanner.nextLine()
                        .split(" "))
                .mapToDouble(Double::parseDouble)
                .toArray();

        Map<Double, Integer> countOfNumbers = new TreeMap<>();

        for (double number : numbers) {

            if (countOfNumbers.containsKey(number)) {

                countOfNumbers.put(number, countOfNumbers.get(number) + 1);
            } else {
                countOfNumbers.put(number, 1);
            }
        }

        for (Map.Entry<Double, Integer> entry : countOfNumbers.entrySet()) {

            DecimalFormat format = new DecimalFormat("#.########");
            System.out.printf("%s -> %d%n", format.format(entry.getKey()), entry.getValue());
        }


    }
}
