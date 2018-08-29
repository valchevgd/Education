import java.util.Scanner;

public class P20_WorldSwimmingRecord {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        double record = Double.parseDouble(input.nextLine());
        double distance = Double.parseDouble(input.nextLine());
        double timePerMeter = Double.parseDouble(input.nextLine());

        double cleanTime = distance * timePerMeter;
        double slowdownTime = Math.floor(distance / 15) * 12.5;
        double totalTime = cleanTime + slowdownTime;
        double difference = record - totalTime;

        if (totalTime < record){
            System.out.printf("Yes, he succeeded! The new world record is %.2f seconds.", totalTime);
        }else {
            System.out.printf("No, he failed! He was %.2f seconds slower.", Math.abs(difference));
        }
    }
}
