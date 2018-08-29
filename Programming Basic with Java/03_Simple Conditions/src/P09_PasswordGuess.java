import java.util.Scanner;

public class P09_PasswordGuess {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        String pass = input.nextLine();

        if ("s3cr3t!P@ssw0rd".equals(pass)){
            System.out.println("Welcome");
        }else {
            System.out.println("Wrong password!");
        }
    }
}
