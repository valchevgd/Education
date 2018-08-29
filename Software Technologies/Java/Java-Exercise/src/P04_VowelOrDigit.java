import java.util.Scanner;

public class P04_VowelOrDigit {
    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in);

        String input = scan.nextLine();

        boolean isDigit = tryParse(input);

        if (isDigit) {
            System.out.println("digit");
        } else {
            switch (input) {
                case "a":
                case "e":
                case "i":
                case "o":
                case "u":
                case "y":
                    System.out.println("vowel");
                    break;
                default:
                    System.out.println("other");
                    break;
            }
        }
    }

    private static boolean tryParse(String input) {
        boolean isDigit = true;

        try {
            int num = Integer.parseInt(input);
        } catch (NumberFormatException nfe){
            isDigit = false;
        }

        return isDigit;
    }
}
