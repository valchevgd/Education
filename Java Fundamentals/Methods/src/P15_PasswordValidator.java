import java.util.Scanner;

public class P15_PasswordValidator {


    public static void main(String[] args) {

        Scanner scanner = new Scanner(System.in);

        String password = scanner.nextLine();

        boolean isValid = validPasswordLength(password);
        isValid = validPasswordChars(password, isValid);
        isValid = validCountOfDigits(password, isValid);

        if (isValid) {

            System.out.println("Password is valid");
        }
    }

    private static boolean validCountOfDigits(String password, boolean isValid) {

        int countOfDigits = 0;

        for (char c : password.toCharArray()) {

            boolean isDigit = c >= 48 && c <= 57;

            if (isDigit) {

                countOfDigits++;

            }

            if (countOfDigits >= 2) {

                return isValid;
            }
        }

        System.out.println("Password must have at least 2 digits");

        return false;

    }

    private static boolean validPasswordChars(String password, boolean isValid) {

        for (char c : password.toCharArray()) {

            boolean isDigit = c >= 48 && c <= 57;
            boolean isUppercase = c >= 65 && c <= 90;
            boolean isLowercase = c >= 97 && c <= 122;

            if (!isDigit
                    && !isUppercase
                    && !isLowercase) {

                System.out.println("Password must consist only of letters and digits");

                return false;
            }
        }

        return isValid;
    }

    private static boolean validPasswordLength(String password) {

        if (password.length() < 6
                || password.length() > 10) {
            System.out.println("Password must be between 6 and 10 characters");

            return false;
        }

        return true;
    }
}
