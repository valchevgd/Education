import java.util.Scanner;

public class P18_HotelRoom {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        String month = input.nextLine().toLowerCase();
        int sleepOver = Integer.parseInt(input.nextLine());
        double priceApartment = 0;
        double priceStudio = 0;

        if ("may".equals(month) || "october".equals(month)){
            priceApartment = sleepOver * 65.0;
            priceStudio = sleepOver * 50.0;
            if (sleepOver > 7 && sleepOver <= 14){
                priceStudio = priceStudio - (priceStudio * 0.05);
            }else if (sleepOver > 14){
                priceStudio = priceStudio - (priceStudio * 0.3);
                priceApartment = priceApartment - (priceApartment * 0.1);
            }
        }else if ("june".equals(month) || "september".equals(month)){
            priceApartment = sleepOver * 68.70;
            priceStudio = sleepOver * 75.20;
            if (sleepOver > 14){
                priceStudio = priceStudio - (priceStudio * 0.2);
                priceApartment = priceApartment - (priceApartment * 0.1);
            }
        }else if ("july".equals(month) || "august".equals(month)){
            priceApartment = sleepOver * 77.0;
            priceStudio = sleepOver * 76.0;
             if (sleepOver > 14){
                priceApartment = priceApartment - (priceApartment * 0.1);
            }
        }

        System.out.printf("Apartment: %.2f lv.%n", priceApartment);
        System.out.printf("Studio: %.2f lv.", priceStudio);
    }
}
