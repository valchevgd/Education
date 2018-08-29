import java.util.Scanner;

public class P14_OnTimeForTheExam {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        int examStartHours = Integer.parseInt(input.nextLine());
        int examStartMinutes = Integer.parseInt(input.nextLine());
        int arrivingHours = Integer.parseInt(input.nextLine());
        int arrivingMinutes = Integer.parseInt(input.nextLine());

        int startingTimeMinutes = examStartHours * 60 + examStartMinutes;
        int arrivingTmeMinutes = arrivingHours * 60 + arrivingMinutes;
        int difference = startingTimeMinutes - arrivingTmeMinutes;
        int differenceHours = Math.abs(difference / 60);
        int differenceMinutes = Math.abs(difference % 60);

        if (difference >= 0 && difference <= 30){
            if (difference == 0 ){
                System.out.println("On time");
            }else {
                System.out.println("On time");
                System.out.printf("%d minutes before the start", difference);
                }
        } else if (difference < 0){
            if (differenceHours == 0){
                System.out.println("Late");
                System.out.printf("%d minutes after the start", differenceMinutes);
            }else if (differenceMinutes < 10){
                System.out.println("Late");
                System.out.printf("%d:0%d hours after the start", differenceHours, differenceMinutes);
            }else {
                System.out.println("Late");
                System.out.printf("%d:%d hours after the start",differenceHours, differenceMinutes);
            }
        }else {
            if (differenceHours == 0){
                System.out.println("Early");
                System.out.printf("%d minutes before the start", differenceMinutes);
            }else if (differenceMinutes < 10){
                System.out.println("Early");
                System.out.printf("%d:0%d hours before the start", differenceHours, differenceMinutes);
            }else {
                System.out.println("Early");
                System.out.printf("%d:%d hours before the start",differenceHours, differenceMinutes);
            }
        }



    }
}
