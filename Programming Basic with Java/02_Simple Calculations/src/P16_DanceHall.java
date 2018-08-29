import java.util.Scanner;

public class P16_DanceHall {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        double hallLight = Double.parseDouble(input.nextLine());
        double hallWidth = Double.parseDouble(input.nextLine());
        double boxSide = Double.parseDouble(input.nextLine());

        double hallAreaCm = (hallLight * 100) * (hallWidth * 100);
        double boxAreaCm = (boxSide * 100) * (boxSide * 100);
        double benchSizeCm = hallAreaCm / 10;

        double hallFreeSpace = hallAreaCm - (boxAreaCm + benchSizeCm);
        double dancers = Math.floor(hallFreeSpace / 7040);

        System.out.printf("%.0f", dancers);
    }
}
