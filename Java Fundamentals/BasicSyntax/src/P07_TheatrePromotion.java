import java.util.Scanner;

public class P07_TheatrePromotion {

    public static void main(String[] args) {


        Scanner scanner = new Scanner(System.in);

        String day = scanner.nextLine().toLowerCase();
        int age = Integer.parseInt(scanner.nextLine());
        int ticketPrice = 0;

        if (age > 0 && age < 123 ) {

            switch (day) {

                case "weekday":
                    if (age >= 19 && age <= 64) {

                        ticketPrice =18;
                    } else {

                        ticketPrice = 12;
                    }

                    break;

                case "weekend":
                    if (age >= 19 && age <= 64) {

                        ticketPrice =20;
                    } else {

                        ticketPrice = 15;
                    }

                    break;

                case "holiday":
                    if (age <= 18) {

                        ticketPrice = 5;
                    } else if (age <= 64) {

                        ticketPrice =12;
                    } else {

                        ticketPrice = 10;
                    }

                    break;
            }
        }


        if (ticketPrice == 0) {

            System.out.println("Error!");
        } else {

            System.out.printf("%d$", ticketPrice);
        }
    }
}
