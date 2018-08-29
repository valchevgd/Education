import java.util.Scanner;

public class P09_AluminiumJoinery {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        int joinerys = Integer.parseInt(input.nextLine());
        String size = input.nextLine();
        String delivery = input.nextLine();

        double price = 0.0;

        if (joinerys < 10){
            System.out.println("Invalid order");
        } else {
            switch (size){
                case "90X130":
                    price = joinerys * 110.0;
                    if (joinerys > 30 && joinerys <= 60){
                        price -= (price * 0.05);
                    }else if (joinerys > 60){
                        price -= (price * 0.08);
                    }
                    break;
                case "100X150":
                    price = joinerys * 140.0;
                    if (joinerys > 40 && joinerys <= 80){
                        price -= (price * 0.06);
                    }else if (joinerys > 80){
                        price -= (price * 0.10);
                    }
                    break;
                case "130X180":
                    price = joinerys * 190.0;
                    if (joinerys > 20 && joinerys <= 50){
                        price -= (price * 0.07);
                    }else if (joinerys > 50){
                        price -= (price * 0.12);
                    }
                    break;
                case "200X300":
                    price = joinerys * 250.0;
                    if (joinerys > 25 && joinerys <= 50){
                        price -= (price * 0.09);
                    }else if (joinerys > 50){
                        price -= (price * 0.14);
                    }
                    break;
            }

            if ("With delivery".equals(delivery)){
                price += 60;
            }

            if (joinerys > 99){
                price -= (price * 0.04);
            }

            System.out.printf("%.2f BGN", price);
        }

    }
}
