import java.util.Scanner;

public class P01_DayOfWeek {

    public static void main(String[] args) {

        Scanner scanner = new Scanner(System.in);

        String[] daysOfWeek = new String[] {"Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"};
        int dayNum = scanner.nextInt();
        String output = "Invalid day!";

        if (dayNum >= 1 && dayNum < 8) {

            output = daysOfWeek[dayNum - 1];
        }

        System.out.println(output);
    }
}
