import java.util.Scanner;

public class P07_RepeatString {

    public static void main(String[] args) {

        Scanner scanner = new Scanner(System.in);

        String input = scanner.nextLine();
        int num = scanner.nextInt();

        String output = repeatString(input, num);

        System.out.println(output);
    }

    private static String repeatString(String input, int num) {

        return String.valueOf(input).repeat(num);
    }
}
