import java.util.Scanner;

public class P21_ToyShop {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        double tripPrice = Double.parseDouble(input.nextLine());
        int puzzles = Integer.parseInt(input.nextLine());
        int dolls = Integer.parseInt(input.nextLine());
        int teddyBears = Integer.parseInt(input.nextLine());
        int minions = Integer.parseInt(input.nextLine());
        int trucks = Integer.parseInt(input.nextLine());

        double puzzlesPrice = puzzles * 2.6;
        double dollsPrice = dolls * 3;
        double teddyBearsPrice = teddyBears * 4.1;
        double minionsPrice = minions * 8.2;
        double trucksPrice = trucks * 2;

        double totalPrice = puzzlesPrice + dollsPrice + teddyBearsPrice + minionsPrice + trucksPrice;

        double totalToys = puzzles + dolls + teddyBears + minions + trucks;
        double rent = 0;

        if (totalToys >= 50){
            double discount = totalPrice * 0.25;
            totalPrice = totalPrice - discount;
            rent = totalPrice * 0.1;
            totalPrice = totalPrice - rent;
            if (totalPrice >= tripPrice){
                System.out.printf("Yes! %.2f lv left.", totalPrice - tripPrice);
            }else {
                System.out.printf("Not enough money! %.2f lv needed.", tripPrice - totalPrice);
            }
        }else {
            rent = totalPrice * 0.1;
            totalPrice = totalPrice - rent;
            if (totalPrice >= tripPrice){
                System.out.printf("Yes! %.2f lv left.", totalPrice - tripPrice);
            }else {
                System.out.printf("Not enough money! %.2f lv needed.", tripPrice - totalPrice);
            }
        }
    }
}
