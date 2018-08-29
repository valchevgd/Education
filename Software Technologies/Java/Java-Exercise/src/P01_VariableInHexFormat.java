import java.util.Scanner;

public class P01_VariableInHexFormat {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        String hexadecimal = input.nextLine();

        int number = Integer.parseInt(hexadecimal, 16);

        System.out.println(number);
    }
}
