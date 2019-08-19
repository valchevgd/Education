import java.util.Scanner;

public class P01_ReverseStrings {

    public static void main(String[] args) {

        Scanner scanner = new Scanner(System.in);

        String line = scanner.nextLine();

        while (!"end".equals(line)) {

            String reversed = reverseString(line);

            System.out.printf("%s = %s%n", line, reversed);

            line = scanner.nextLine();
        }
    }

    private static String reverseString(String line) {

        StringBuilder output = new StringBuilder();

        for (int i = line.length() - 1; i >= 0 ; i--) {

            output.append(line.charAt(i));
        }

        return output.toString();
    }
}
