import java.util.Scanner;

public class P15_Travel {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        double budget = Double.parseDouble(input.nextLine());
        String season = input.nextLine().toLowerCase();

        if (budget <= 100){
            System.out.println("Somewhere in Bulgaria");
            if ("summer".equals(season)){
                System.out.printf("Camp - %.2f", budget * 0.3);
            }else {
                System.out.printf("Hotel - %.2f", budget * 0.7);
            }
        }else if (budget <= 1000){
            System.out.println("Somewhere in Balkans");
            if ("summer".equals(season)){
                System.out.printf("Camp - %.2f", budget * 0.4);
            }else {
                System.out.printf("Hotel - %.2f", budget * 0.8);
            }
        }else {
            System.out.println("Somewhere in Europe");
            System.out.printf("Hotel - %.2f", budget * 0.9);
        }
    }
}
