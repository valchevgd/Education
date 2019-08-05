import java.util.Scanner;

public class P09_GreaterOfTwoValues {

    public static void main(String[] args) {

        Scanner scanner = new Scanner(System.in);

        String input = scanner.nextLine();
        String output;

        switch (input) {

            case "int":
                int firstInt = scanner.nextInt();
                int secondInt = scanner.nextInt();

                output = getMax(firstInt, secondInt);
                break;
            case"char":
                char firstChar = scanner.nextLine().charAt(0);
                char secondChar = scanner.nextLine().charAt(0);

                output = getMax(firstChar, secondChar);
                break;

            case "string":
                String firstString = scanner.nextLine();
                String secondString = scanner.nextLine();

                output = getMax(firstString, secondString);
                break;

            default:
                output = "Error!";
        }

        System.out.println(output);
    }

    private static String getMax(int firstInt, int secondInt) {

        if (firstInt >= secondInt) {

            return String.valueOf(firstInt);
        }

        return String.valueOf(secondInt);
    }

    private static String getMax(char firstChar, char secondChar) {

        if (firstChar >= secondChar) {

            return String.valueOf(firstChar);
        }

        return String.valueOf(secondChar);
    }

    private static String getMax(String firstString, String secondString) {

        if (firstString.compareTo(secondString) >= 0) {

            return firstString;
        }

        return secondString;
    }
}
