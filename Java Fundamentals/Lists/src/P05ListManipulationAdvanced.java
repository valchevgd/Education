import java.util.Arrays;
import java.util.List;
import java.util.Scanner;
import java.util.stream.Collectors;

public class P05ListManipulationAdvanced {

    public static void main(String[] args) {

        Scanner scanner = new Scanner(System.in);

        List<Integer> numbers = Arrays
                .stream(scanner.nextLine().split(" "))
                .map(Integer::parseInt)
                .collect(Collectors.toList());

        String line = scanner.nextLine();

        while (!line.equals("end")) {

            String[] tokens = line.split(" ");

            if (tokens.length == 3) {

                String sign = tokens[1];
                int input = Integer.parseInt(tokens[2]);

                switch (sign) {
                    case ">":
                        for (Integer bigger : numbers) {
                            if (bigger > input) {
                                System.out.printf("%d ", bigger);
                            }
                        }
                        System.out.println();
                        break;
                    case "<":
                        for (Integer smaller : numbers) {
                            if (smaller < input) {
                                System.out.printf("%d ", smaller);
                            }
                        }
                        System.out.println();
                        break;
                    case ">=":
                        for (Integer biggerOrEqual : numbers) {
                            if (biggerOrEqual >= input) {
                                System.out.printf("%d ", biggerOrEqual);
                            }
                        }
                        System.out.println();
                        break;
                    case "<=":
                        for (Integer smallerOrEqual : numbers) {
                            if (smallerOrEqual <= input) {
                                System.out.printf("%d ", smallerOrEqual);
                            }
                        }
                        System.out.println();
                        break;
                }

            }

            if (tokens[0].equals("Contains")) {
                int number = Integer.parseInt(tokens[1]);
                boolean inList = numbers.contains(number);

                if (inList) {
                    System.out.println("Yes");
                } else {
                    System.out.println("No such number");
                }
            } else {
                switch (line) {

                    case "Print even":
                        for (int num : numbers) {
                            if (num % 2 == 0) {
                                System.out.printf("%d ", num);
                            }
                        }

                        System.out.println();
                        break;
                    case "Print odd":
                        for (int numb : numbers) {
                            if (numb % 2 != 0) {
                                System.out.printf("%d ", numb);
                            }
                        }

                        System.out.println();
                        break;
                    case "Get sum":
                        int sum = 0;
                        for (int integer : numbers) {
                            sum += integer;
                        }
                        System.out.println(sum);
                        break;
                }

            }


            line = scanner.nextLine();
        }
    }
}
