import java.util.Scanner;

public class P05_Bus {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        int startingPassengers = Integer.parseInt(input.nextLine());
        int stops = Integer.parseInt(input.nextLine());

        for (int i = 1; i <= stops; i++){
            int passengersOut = Integer.parseInt(input.nextLine());
            int passengersIn = Integer.parseInt(input.nextLine());

            startingPassengers = startingPassengers - passengersOut + passengersIn;

            if (i % 2 != 0){
                startingPassengers += 2;
            }else {
                startingPassengers -= 2;
            }
        }

        System.out.printf("The final number of passengers is : %d", startingPassengers);
    }
}
