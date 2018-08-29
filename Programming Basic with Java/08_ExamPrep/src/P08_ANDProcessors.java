import java.util.Scanner;

public class P08_ANDProcessors {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        int processorsNeeded = Integer.parseInt(input.nextLine());
        int workers = Integer.parseInt(input.nextLine());
        int workingDays = Integer.parseInt(input.nextLine());

        int totalWorkingHours = workers * workingDays * 8;
        double totalProcessorsMaked = totalWorkingHours / 3.0;
        double difference = Math.floor(totalProcessorsMaked - processorsNeeded);

        if (totalProcessorsMaked >= processorsNeeded){
            System.out.printf("Profit: -> %.2f BGN", Math.abs(difference * 110.10));
        }else {
            System.out.printf("Losses: -> %.2f BGN", Math.abs(difference * 110.10));
        }
    }
}
