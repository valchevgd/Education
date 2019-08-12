import java.util.Arrays;
import java.util.List;
import java.util.Scanner;
import java.util.stream.Collectors;

public class P08_Train {

    public static void main(String[] args) {

        Scanner scanner = new Scanner(System.in);

        List<Integer> train = Arrays
                .stream(scanner.nextLine().split(" "))
                .map(Integer::parseInt)
                .collect(Collectors.toList());

        int maxCapacity = Integer.parseInt(scanner.nextLine());

        String line = scanner.nextLine();

        while (!line.equals("end")) {

            String[] tokens = line.split(" ");

            if (tokens.length == 2) {

                addWagon(Integer.parseInt(tokens[1]), train);
            } else {

                findWagon(Integer.parseInt(tokens[0]), maxCapacity, train);
            }

            line = scanner.nextLine();
        }

        System.out.println(train.toString().replaceAll("[\\[\\],]", ""));
    }

    private static void findWagon(int passengers, int maxCapacity, List<Integer> train) {

        final int LOOP_LENGTH = train.size();

        for (int i = 0; i < LOOP_LENGTH; i++) {

            int newPassengersIn = train.get(i) + passengers;

            if (maxCapacity >= newPassengersIn) {

                train.set(i, newPassengersIn);
                return;
            }
        }

    }

    private static void addWagon(int wagon, List<Integer> train) {

        train.add(wagon);
    }
}
