import java.util.Scanner;

public class P14_CharactersInRange {

    public static void main(String[] args) {

        Scanner scanner = new Scanner(System.in);

        char firstChar = scanner.next().charAt(0);
        char secondChar = scanner.next().charAt(0);

        printCharsBetween(firstChar, secondChar);

    }

    private static void printCharsBetween(char firstChar, char secondChar) {

        for (int i = Math.min(firstChar, secondChar) + 1; i < Math.max(firstChar, secondChar); i++) {
            char c = (char)i;
            System.out.print(c + " ");
        }
    }
}
