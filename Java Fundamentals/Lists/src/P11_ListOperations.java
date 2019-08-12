import java.util.Arrays;
import java.util.List;
import java.util.Scanner;
import java.util.stream.Collectors;

public class P11_ListOperations {

    public static void main(String[] args) {

        Scanner scanner = new Scanner(System.in);

        List<Integer> numbers = Arrays
                .stream(scanner.nextLine().split(" "))
                .map(Integer::parseInt)
                .collect(Collectors.toList());

        String line = scanner.nextLine();

        while (!line.equals("End")) {

            String[] tokens = line.split(" ");

            switch (tokens[0]) {

                case "Add":
                    int num = Integer.parseInt(tokens[1]);
                    addNumber(num, numbers);
                    break;
                case "Insert":
                    int number = Integer.parseInt(tokens[1]);
                    int index = Integer.parseInt(tokens[2]);
                    insertNumber(number, index, numbers);
                    break;
                case "Remove":
                    int ind = Integer.parseInt(tokens[1]);
                    removeAtIndex(ind, numbers);
                    break;
                default:
                    if (tokens[1].equals("left")) {

                        int count = Integer.parseInt(tokens[2]);
                        shiftLeft(count, numbers);
                    } else {

                        int count = Integer.parseInt(tokens[2]);
                        shiftRight(count, numbers);
                    }
            }


            line = scanner.nextLine();
        }

        System.out.println(numbers.toString().replaceAll("[\\[\\],]", ""));

    }

    private static void shiftRight(int count, List<Integer> numbers) {

        final int TURNS = count % numbers.size();

        for (int i = TURNS; i > 0; i--) {

            int lastElement = numbers.get(numbers.size() - 1);

            for (int j = numbers.size() - 1; j > 0; j--) {

                numbers.set(j, numbers.get(j - 1));
            }

            numbers.set(0, lastElement);
        }
    }

    private static void shiftLeft(int count, List<Integer> numbers) {

        final int TURNS = count % numbers.size();

        for (int i = 0; i < TURNS; i++) {

            int firstElement = numbers.get(0);

            for (int j = 0; j < numbers.size() - 1; j++) {

                numbers.set(j, numbers.get(j + 1));
            }

            numbers.set(numbers.size() - 1, firstElement);
        }
    }

    private static void removeAtIndex(int ind, List<Integer> numbers) {

        if (ind < 0 || ind >= numbers.size()){

            System.out.println("Invalid index");
            return;
        }

        numbers.remove(ind);
    }

    private static void insertNumber(int number, int index, List<Integer> numbers) {

        if (index < 0 || index >= numbers.size()){

            System.out.println("Invalid index");
            return;
        }

        numbers.add(index, number);
    }

    private static void addNumber(int num, List<Integer> numbers) {

        numbers.add(num);
    }
}
