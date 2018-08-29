import java.util.Scanner;

public class P26_Firm {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        int neededHours = Integer.parseInt(input.nextLine());
        int days = Integer.parseInt(input.nextLine());
        int workers = Integer.parseInt(input.nextLine());

        double workingDays = days * 0.9;
        double workingHours = (workingDays * 8) * workers;
        double overtimeHours = (workingDays * 2) * workers;
        double totalHours = Math.floor(workingHours + overtimeHours);

        if (totalHours >= neededHours){
            System.out.printf("Yes!%.0f hours left.", totalHours - neededHours);
        }else {
            System.out.printf("Not enough time!%.0f hours needed.", neededHours - totalHours);
        }
    }
}
