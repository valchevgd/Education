import java.util.Scanner;

public class P13_ReverseString {
    public static void main(String[] args) {

        Scanner input = new Scanner(System.in);

        String text = input.nextLine();
        String reversed = reverseString(text);

        System.out.println(reversed);
    }

    private static String reverseString(String input) {
        StringBuilder reversed = new StringBuilder();
        char[] temp = input.toCharArray();

        for (int i = 0; i < input.length(); i++) {
            reversed.append(temp[input.length() - 1 - i]);
        }
        return reversed.toString();
    }
}
