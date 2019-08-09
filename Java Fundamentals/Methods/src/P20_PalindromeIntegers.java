import java.util.Scanner;

public class P20_PalindromeIntegers {

    public static void main(String[] args) {

        Scanner scanner = new Scanner(System.in);

        String line = scanner.nextLine();

        while (!line.equals("END")) {

            boolean palindrome = isPalindrome(line);

            System.out.println(palindrome);

            line = scanner.nextLine();
        }
    }

    private static boolean isPalindrome(String line) {

        boolean result = true;
        final int loopLength = line.length() / 2;

        for (int i = 0; i < loopLength; i++) {

            if (line.charAt(i) != line.charAt(line.length() - 1 - i)) {

                result = false;
                break;
            }
        }

        return result;
    }
}
