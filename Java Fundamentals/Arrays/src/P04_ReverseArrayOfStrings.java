import java.util.Scanner;

public class P04_ReverseArrayOfStrings {

    public static void main(String[] args) {

        Scanner scanner = new Scanner(System.in);

        String[] input = scanner.nextLine().split(" ");

        String[] output = reverseArray(input);

        System.out.println(String.join(" ", output));
    }

    private static String[] reverseArray(String[] input) {

        String[] reversed = new String[input.length];
        int index = input.length - 1;

        for (String word : input) {

            reversed[index] = word;
            index--;
        }

        return reversed;
    }
}
