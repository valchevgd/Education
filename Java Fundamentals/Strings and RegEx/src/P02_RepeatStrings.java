import java.util.Scanner;

public class P02_RepeatStrings {

    public static void main(String[] args) {

        Scanner scanner = new Scanner(System.in);

        String[] words = scanner.nextLine().split(" ");

        StringBuilder output = new StringBuilder();

        for (String word : words) {

            int length = word.length();

            output.append(word.repeat(length));
        }

        System.out.println(output);
    }
}
