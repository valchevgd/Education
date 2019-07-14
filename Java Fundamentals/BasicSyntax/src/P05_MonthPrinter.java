import java.util.Scanner;

public class P05_MonthPrinter {

    public static void main(String[] args) {

        Scanner scanner = new Scanner(System.in);

        String[] months = new String[]{"January", "February", "March", "April", "May", "Jun", "July", "August", "September", "October", "November", "December"};

        int num = Integer.parseInt(scanner.nextLine());

        if (num < 1 || num > 12) {

            System.out.println("Error!");
        } else {

            System.out.println(months[num - 1]);
        }
    }
}
