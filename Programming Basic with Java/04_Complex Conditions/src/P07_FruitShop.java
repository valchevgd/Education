import java.util.Scanner;

public class P07_FruitShop {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        String fruit = input.nextLine().toLowerCase();
        String dayOfWeek = input.nextLine().toLowerCase();
        double quantity = Double.parseDouble(input.nextLine());

        double price = 0;

        if ("saturday".equals(dayOfWeek) || "sunday".equals(dayOfWeek)){
            if ("banana".equals(fruit)){
                price = 2.7;
            }else if ("apple".equals(fruit)){
                price = 1.25;
            }else if ("orange".equals(fruit)){
                price = 0.9;
            }else if ("grapefruit".equals(fruit)){
                price = 1.6;
            }else if ("kiwi".equals(fruit)){
                price = 3;
            }else if ("pineapple".equals(fruit)){
                price = 5.6;
            }else if ("grapes".equals(fruit)){
                price = 4.2;
            }
        }else if ("monday".equals(dayOfWeek) || "tuesday".equals(dayOfWeek) || "wednesday".equals(dayOfWeek) ||
                "thursday".equals(dayOfWeek) || "friday".equals(dayOfWeek)){
            if ("banana".equals(fruit)){
                price = 2.5;
            }else if ("apple".equals(fruit)){
                price = 1.2;
            }else if ("orange".equals(fruit)){
                price = 0.85;
            }else if ("grapefruit".equals(fruit)){
                price = 1.45;
            }else if ("kiwi".equals(fruit)){
                price = 2.7;
            }else if ("pineapple".equals(fruit)){
                price = 5.5;
            }else if ("grapes".equals(fruit)){
                price = 3.85;
            }
        }

        double sum = price * quantity;
        if (sum > 0){
            System.out.println(sum);
        }else {
            System.out.println("error");
        }
    }
}
