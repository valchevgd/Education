import java.util.Scanner;

public class P05_transportPrice {

    public static void main(String[] args) {

        Scanner input = new Scanner(System.in);

        double distance = input.nextDouble();
        String period = input.next();

        double totalPrice = 0;

        if (distance > 0 && distance < 20){

            if ("day".equals(period)){
                totalPrice = distance * 0.79;
            }else {
                totalPrice = distance * 0.9;
            }

            totalPrice += 0.7;
        }else if (distance < 100){
            totalPrice = distance * 0.09;
        }else {
            totalPrice = distance * 0.06;
        }


        System.out.printf("%.2f", totalPrice);
    }
}
