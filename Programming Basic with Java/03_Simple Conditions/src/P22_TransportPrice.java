import java.util.Scanner;

public class P22_TransportPrice {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);
        int distance = Integer.parseInt(input.nextLine());

        String timeInDay = input.nextLine();

        double price = 0;

        if(distance < 20){

            price = 0.7;

            if("day".equals(timeInDay)){

                price = price + (distance * 0.79);

                System.out.println(price);

            }else if("night".equals(timeInDay)){

                price = price + (distance * 0.9);

                System.out.println(price);

            }

        }else if( distance < 100){

            price = distance * 0.09;

            System.out.println(price);

        }else if(distance >= 100){

            price = distance * 0.06;

            System.out.println(price);

        }
    }
}
