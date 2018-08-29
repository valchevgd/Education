
import java.time.LocalDate;
import java.time.format.DateTimeFormatter;
import java.util.Scanner;

public class P14_1000DaysAfterBirth {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);
        String days = input.nextLine();
        DateTimeFormatter formater = DateTimeFormatter.ofPattern("dd-MM-yyyy");
        LocalDate after1000 = LocalDate.parse(days, formater).plusDays(999);
        System.out.println(formater.format(after1000));


    }
}
