import java.util.Scanner;

public class P17_MiddleCharacters {

    public static void main(String[] args) {

        Scanner scanner = new Scanner(System.in);

        String input = scanner.nextLine();

        printMiddleCharacters(input);
    }

    private static void printMiddleCharacters(String word) {

        int middle = word.length() / 2;

        if (word.length() % 2 == 0) {

            System.out.printf("%s%s%n", word.charAt(middle - 1), word.charAt(middle));

            return;
        }

        System.out.println(word.charAt(middle));
    }
}
