import java.util.ArrayList;
import java.util.Arrays;
import java.util.List;
import java.util.Scanner;
import java.util.stream.Collectors;

public class P03_MergingLists {

    public static void main(String[] args) {

        Scanner scanner = new Scanner(System.in);

        List<Integer> firstList = Arrays
                .stream(scanner.nextLine().split(" "))
                .map(Integer::parseInt)
                .collect(Collectors.toList());

        List<Integer> secondList = Arrays
                .stream(scanner.nextLine().split(" "))
                .map(Integer::parseInt)
                .collect(Collectors.toList());

        List<Integer> outputList = new ArrayList<>();

        final int MAX_SIZE = Math.max(firstList.size(), secondList.size());
        int index = 0;

        while (index < MAX_SIZE) {

            if (index < firstList.size()) {

                outputList.add(firstList.get(index));
            }

            if (index < secondList.size()) {

                outputList.add(secondList.get(index));
            }
            index++;
        }

        System.out.println(outputList.toString().replaceAll("[\\[\\],]", ""));

    }
}
