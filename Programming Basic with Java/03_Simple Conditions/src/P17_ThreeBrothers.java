import java.util.Scanner;

public class P17_ThreeBrothers {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        double firstBrotherTime = Double.parseDouble(input.nextLine());
        double secondBrotherTime = Double.parseDouble(input.nextLine());
        double thirdBrotherTime = Double.parseDouble(input.nextLine());
        double fishingTime = Double.parseDouble(input.nextLine());

        double totalCleaningTime = 1 / (1 / firstBrotherTime + 1 / secondBrotherTime + 1 / thirdBrotherTime);
        double timeWithBreak = totalCleaningTime +(totalCleaningTime * 0.15);
        double finalTime = Math.abs(timeWithBreak - fishingTime);

        if (timeWithBreak <= fishingTime){
            System.out.printf("Cleaning time: %.2f%n", timeWithBreak);
            System.out.printf("Yes, there is a surprise - time left -> %.0f hours.", Math.floor(finalTime));
        }else {
            System.out.printf("Cleaning time: %.2f%n", timeWithBreak);
            System.out.printf("No, there isn't a surprise - shortage of time -> %.0f hours.", Math.ceil(finalTime));
        }
    }
}




