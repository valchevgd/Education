import java.util.Arrays;
import java.util.List;
import java.util.Scanner;
import java.util.stream.Collectors;

public class P04_ListManipulationBasics {

    public static void main(String[] args) {

        Scanner scanner = new Scanner(System.in);

        List<Integer> numbers = Arrays
                .stream(scanner.nextLine().split(" "))
                .map(Integer::parseInt)
                .collect(Collectors.toList());

        String line = scanner.nextLine();

        while (!line.equals("end")) {

            String[] tokens = line.split(" ");
            String command = tokens[0];

            switch (command) {

                case "Add":
                    int numberToAdd = Integer.parseInt(tokens[1]);
                    numbers.add(numberToAdd);
                    break;
                case "Remove":
                    int numberToRemove = Integer.parseInt(tokens[1]);
                    numbers.remove(Integer.valueOf(numberToRemove));
                    break;
                case "RemoveAt":
                    int indexToRemove = Integer.parseInt(tokens[1]);
                    numbers.remove(indexToRemove);
                    break;
                case "Insert":
                    int number = Integer.parseInt(tokens[1]);
                    int index = Integer.parseInt(tokens[2]);
                    numbers.add(index, number);
                    break;
            }

            line = scanner.nextLine();
        }

        System.out.println(numbers.toString().replaceAll("[\\[\\],]", ""));
    }
}
