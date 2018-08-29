import java.util.Scanner;

public class P14_TimePlus15Minutes {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        int hours = input.nextInt();
        int minutes = input.nextInt();

        if (minutes < 45){
            minutes = minutes + 15;
            System.out.printf("%d:%d", hours, minutes);
        }else if (minutes == 45){
            hours = hours + 1;
            if (hours < 24){
                System.out.printf("%d:00", hours);
            }else {
                System.out.println("0:00");
            }
        }else {
            minutes = (minutes + 15) - 60;
            hours = hours + 1;
            if (minutes < 10){
                if (hours < 24){
                    System.out.printf("%d:0%d", hours, minutes);
                }else {
                    System.out.printf("0:0%d", minutes);
                }
            }else {
                if (hours < 24){
                    System.out.printf("%d:%d", hours, minutes);
                }else {
                    System.out.printf("0:%d", minutes);
                }
            }
        }
    }
}
