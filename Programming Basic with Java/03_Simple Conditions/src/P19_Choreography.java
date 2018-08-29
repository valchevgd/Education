import java.util.Scanner;

public class P19_Choreography {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        double steps = Double.parseDouble(input.nextLine());
        double dancers = Double.parseDouble(input.nextLine());
        double days = Double.parseDouble(input.nextLine());

        double stepsPerDay = Math.ceil(((steps / days) / steps) * 100);
        double stepsPerDancer = stepsPerDay / dancers;

        if (stepsPerDay <= 13){
            System.out.printf("Yes, they will succeed in that goal! %.2f%%.", stepsPerDancer);
        }else {
            System.out.printf("No, They will not succeed in that goal! Required %.2f%% steps to be learned per day.", stepsPerDancer);
        }
    }
}
