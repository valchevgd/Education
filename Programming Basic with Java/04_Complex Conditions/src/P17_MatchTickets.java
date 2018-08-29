import java.util.Scanner;

public class P17_MatchTickets {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        double budget = Double.parseDouble(input.nextLine());
        String stadiumPlace = input.nextLine();
        int fans = Integer.parseInt(input.nextLine());
        double totalForTickets = 0;
        double transport = 0;

        if (fans < 5){
            transport = budget * 0.75;
            if ("Normal".equals(stadiumPlace)){
                totalForTickets = fans * 249.99;
                budget = budget - transport;
                if (totalForTickets <= budget){
                    System.out.printf("Yes! You have %.2f leva left.", budget - totalForTickets);
                }else {
                    System.out.printf("Not enough money! You need %.2f leva.", totalForTickets - budget);
                }
            }else {
                totalForTickets = fans * 499.99;
                budget = budget - transport;
                if (totalForTickets <= budget) {
                    System.out.printf("Yes! You have %.2f leva left.", budget - totalForTickets);
                } else {
                    System.out.printf("Not enough money! You need %.2f leva.", totalForTickets - budget);
                }
            }
        }else if (fans < 10){
            transport = budget * 0.6;
            if ("Normal".equals(stadiumPlace)){
                totalForTickets = fans * 249.99;
                budget = budget - transport;
                if (totalForTickets <= budget){
                    System.out.printf("Yes! You have %.2f leva left.", budget - totalForTickets);
                }else {
                    System.out.printf("Not enough money! You need %.2f leva.", totalForTickets - budget);
                }
            }else {
                totalForTickets = fans * 499.99;
                budget = budget - transport;
                if (totalForTickets <= budget) {
                    System.out.printf("Yes! You have %.2f leva left.", budget - totalForTickets);
                } else {
                    System.out.printf("Not enough money! You need %.2f leva.", totalForTickets - budget);
                }
            }
        }else if (fans < 25){
            transport = budget * 0.5;
            if ("Normal".equals(stadiumPlace)){
                totalForTickets = fans * 249.99;
                budget = budget - transport;
                if (totalForTickets <= budget){
                    System.out.printf("Yes! You have %.2f leva left.", budget - totalForTickets);
                }else {
                    System.out.printf("Not enough money! You need %.2f leva.", totalForTickets - budget);
                }
            }else {
                totalForTickets = fans * 499.99;
                budget = budget - transport;
                if (totalForTickets <= budget) {
                    System.out.printf("Yes! You have %.2f leva left.", budget - totalForTickets);
                } else {
                    System.out.printf("Not enough money! You need %.2f leva.", totalForTickets - budget);
                }
            }
        }else if (fans < 50){
            transport = budget * 0.4;
            if ("Normal".equals(stadiumPlace)){
                totalForTickets = fans * 249.99;
                budget = budget - transport;
                if (totalForTickets <= budget){
                    System.out.printf("Yes! You have %.2f leva left.", budget - totalForTickets);
                }else {
                    System.out.printf("Not enough money! You need %.2f leva.", totalForTickets - budget);
                }
            }else {
                totalForTickets = fans * 499.99;
                budget = budget - transport;
                if (totalForTickets <= budget) {
                    System.out.printf("Yes! You have %.2f leva left.", budget - totalForTickets);
                } else {
                    System.out.printf("Not enough money! You need %.2f leva.", totalForTickets - budget);
                }
            }
        }else if (fans >= 50){
            transport = budget * 0.25;
            if ("Normal".equals(stadiumPlace)){
                totalForTickets = fans * 249.99;
                budget = budget - transport;
                if (totalForTickets <= budget){
                    System.out.printf("Yes! You have %.2f leva left.", budget - totalForTickets);
                }else {
                    System.out.printf("Not enough money! You need %.2f leva.", totalForTickets - budget);
                }
            }else {
                totalForTickets = fans * 499.99;
                budget = budget - transport;
                if (totalForTickets <= budget) {
                    System.out.printf("Yes! You have %.2f leva left.", budget - totalForTickets);
                } else {
                    System.out.printf("Not enough money! You need %.2f leva.", totalForTickets - budget);
                }
            }
        }
    }
}
