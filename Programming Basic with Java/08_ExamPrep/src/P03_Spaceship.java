import java.util.Scanner;

public class P03_Spaceship {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        double shipWide = Double.parseDouble(input.nextLine());
        double shipLight = Double.parseDouble(input.nextLine());
        double shipHeight = Double.parseDouble(input.nextLine());
        double averageAstronautsHeight = Double.parseDouble(input.nextLine());

        double shipArea = shipWide * shipLight * shipHeight;
        double roomArea = (averageAstronautsHeight + 0.4) * 2 * 2;
        double numberOfAstronauts = shipArea / roomArea;

        if (numberOfAstronauts < 3){
            System.out.println("The spacecraft is too small.");
        }else if (numberOfAstronauts > 10){
            System.out.println("The spacecraft is too big.");
        }else {
            System.out.printf("The spacecraft holds %.0f astronauts.", Math.floor(numberOfAstronauts));
        }
    }
}
