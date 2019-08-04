import java.util.Arrays;
import java.util.Scanner;

public class P14_MaxSequenceOfEqualElements {

    public static void main(String[] args) {

        Scanner scanner = new Scanner(System.in);

        int[] array = Arrays
                .stream(scanner.nextLine().split(" "))
                .mapToInt(Integer::parseInt)
                .toArray();
        final int length = array.length;

        int startingIndex = 0;
        int lastIndex = 0;
        int maxSequence = 0;

        int currentSequence = 0;
        int currentStartIndex = 0;

        for (int i = 1; i < length; i++) {

            if (array[i - 1] == array[i]) {

                currentSequence++;
            } else {

                if (currentSequence > maxSequence) {

                    maxSequence = currentSequence;
                    startingIndex = currentStartIndex;
                    lastIndex = i;
                }

                currentSequence = 0;
                currentStartIndex = i;
            }
        }

        if (currentSequence > maxSequence) {

            maxSequence = currentSequence;
            startingIndex = currentStartIndex;
            lastIndex = length;
        }

        for (int i = startingIndex; i < lastIndex; i++) {

            System.out.print(array[i] + " ");
        }
    }
}
