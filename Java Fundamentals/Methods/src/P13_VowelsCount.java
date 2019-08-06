import java.util.Arrays;
import java.util.Collections;
import java.util.Objects;
import java.util.Scanner;

public class P13_VowelsCount {

    public static void main(String[] args) {

        Scanner scanner = new Scanner(System.in);

        String input = scanner.nextLine();

        printCountOfVowels(input.toLowerCase());
    }

    private static void printCountOfVowels(String input) {

        int countOfVowels = 0;
        final int length = input.length();
        String vowels = "aeiouy";

        for (int i = 0; i < length; i++) {

            if (vowels.indexOf(input.charAt(i)) != -1) {

                countOfVowels++;
            }
        }

        System.out.println(countOfVowels);
    }
}
