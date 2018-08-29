import java.util.Scanner;

public class P19_TrainingLab {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        double light = Double.parseDouble(input.nextLine());
        double width = Double.parseDouble(input.nextLine());

        double workingPlaceLight = Math.floor((light * 100) / 120);
        double workingPlaceWidth = Math.floor(((width * 100) -100) / 70);
        double totalWorkingPlace = workingPlaceLight * workingPlaceWidth - 3;


        System.out.printf("%.0f", totalWorkingPlace);
    }
}
