import java.util.ArrayList;
import java.util.Arrays;
import java.util.List;
import java.util.Scanner;
import java.util.stream.Collectors;

public class P17_TakeSkipRope {

    public static void main(String[] args) {

        Scanner scanner = new Scanner(System.in);

        List<String> inputList = Arrays
                .stream(scanner.nextLine().split(""))
                .collect(Collectors.toList());

        List<Integer> numbers = new ArrayList<>();

        for (int i = 0; i < inputList.size(); i++) {

            try {
                int num = Integer.parseInt(inputList.get(i));
                numbers.add(num);
                inputList.remove(i);
                i--;
            } catch (NumberFormatException e) {

            }
        }

        List<Integer> evenIndexes = new ArrayList<>();
        List<Integer> oddIndexes = new ArrayList<>();

        for (int i = 0; i < numbers.size(); i++) {

            if (i % 2 == 0) {

                evenIndexes.add(numbers.get(i));
            } else {

                oddIndexes.add(numbers.get(i));
            }
        }

        List<String> output = new ArrayList<>();

        for (int i = 0; i < evenIndexes.size(); i++) {

            take(evenIndexes.get(i), inputList, output);
            skip(oddIndexes.get(i), inputList);
        }

        System.out.println(String.join("", output));
    }

    private static void skip(int count, List<String> inputList) {
        int sizeAtBegun = inputList.size();

        for (int i = 0; i < Math.min(count, sizeAtBegun); i++) {

            inputList.remove(0);
        }
    }

    private static void take(int count, List<String> inputList, List<String> output) {

        int sizeAtBegun = inputList.size();

        for (int i = 0; i < Math.min(count, sizeAtBegun); i++) {

            output.add(inputList.get(0));
            inputList.remove(0);
        }
    }
}
