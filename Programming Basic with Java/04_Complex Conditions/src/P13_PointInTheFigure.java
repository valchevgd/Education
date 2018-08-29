import java.util.Scanner;

public class P13_PointInTheFigure {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        int number = input.nextInt();
        int x = input.nextInt();
        int y = input.nextInt();

        boolean isInside = (x > 0 && x < ( number * 3) && y < number && y > 0) ||
                (x > number && x < (number * 2) && y >= number && y < (number * 4));
        boolean isOutside = (x < 0 || y < 0) || ( x > number * 3 || y > number * 4) ||
                (y <= number * 4 && y > number && (x < number || x > number * 2));

        if (isInside){
            System.out.println("inside");
        }else if (isOutside){
            System.out.println("outside");
        }else {
            System.out.println("border");
        }
    }
}
