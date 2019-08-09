import java.util.Scanner;

public class P22_DataTypes {

    public static void main(String[] args) {

        Scanner scanner = new Scanner(System.in);

        String input = scanner.nextLine();

        switch (input) {

            case "int":
                int num = scanner.nextInt();
                printTheOutput(num);
                break;
            case "real":
                double n = scanner.nextDouble();
                printTheOutput(n);
                break;
            case "string":
                String str = scanner.nextLine();
                printTheOutput(str);
                break;
        }
    }

    private static void printTheOutput(int num) {

        System.out.println(num * 2);
    }

    private static void printTheOutput(double num) {

        System.out.printf("%.2f", num * 1.5);
    }

    private static void printTheOutput(String str) {

        System.out.printf("$%s$", str);
    }
}
