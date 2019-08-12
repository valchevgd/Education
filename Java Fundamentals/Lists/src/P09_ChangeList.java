import java.util.Arrays;
import java.util.Collections;
import java.util.List;
import java.util.Scanner;
import java.util.stream.Collectors;

public class P09_ChangeList {

    public static void main(String[] args) {

        Scanner scanner = new Scanner(System.in);

        List<Integer> numbers = Arrays
                .stream(scanner.nextLine().split(" "))
                .map(Integer::parseInt)
                .collect(Collectors.toList());

        String line = scanner.nextLine();

        while (!line.equals("end")){

            String[] tokens = line.split(" ");

            if (tokens.length == 2) {

                removeElement(Integer.parseInt(tokens[1]), numbers);
            } else {

                insertElement(Integer.parseInt(tokens[1]), Integer.parseInt(tokens[2]), numbers);
            }

            line = scanner.nextLine();
        }

        System.out.println(numbers.toString().replaceAll("[\\[\\],]", ""));
    }

    private static void insertElement(int element, int index, List<Integer> numbers) {

        numbers.add(index, element);
    }

    private static void removeElement(int element, List<Integer> numbers) {

        numbers.removeAll(Collections.singleton(element));
    }
}
