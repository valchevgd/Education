import java.util.Scanner;

public class P04_TextFilter {

    public static void main(String[] args) {

        Scanner scanner = new Scanner(System.in);

        String[] bannedWords = scanner.nextLine().split(", ");
        String text = scanner.nextLine();

        for (String bannedWord : bannedWords) {

            text = text.replaceAll(bannedWord, repeatString(bannedWord.length(), "*"));
        }

        System.out.println(text);
    }

    private static String repeatString(int length, String s) {

        StringBuilder output = new StringBuilder();

        for (int i = 0; i < length; i++) {
            output.append(s);
        }

        return output.toString();
    }
}
