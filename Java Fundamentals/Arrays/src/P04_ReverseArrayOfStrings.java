import java.util.Scanner;

public class P04_ReverseArrayOfStrings {

    public static void main(String[] args) {

        Scanner scanner = new Scanner(System.in);

        String[] input = scanner.nextLine().split(" ");

        reverseArray(input);

        System.out.println(String.join(" ", input));
    }

    private static void reverseArray(String[] input) {

        for (int i = 0; i < input.length / 2; i++) {

            String temp = input[i];

            input[i] = input[input.length - 1 - i];
            input[input.length - 1 - i] = temp;
        }


    }
}
