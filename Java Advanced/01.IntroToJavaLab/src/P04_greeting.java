import java.util.Scanner;

public class P04_greeting {

    public static void main(String[] args) {

        Scanner input = new Scanner(System.in);

        String firstName = input.nextLine();
        String lastName = input.nextLine();

        if ("".equals(firstName)){
            firstName = "*****";
        }

        if ("".equals(lastName)){
            lastName = "*****";
        }

        System.out.printf("Hello, %s %s!", firstName, lastName);
    }
}
