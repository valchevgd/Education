import java.util.Scanner;

public class P03_PointInRectangle {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        double x1 = Double.parseDouble(input.nextLine());
        double y1 = Double.parseDouble(input.nextLine());
        double x2 = Double.parseDouble(input.nextLine());
        double y2 = Double.parseDouble(input.nextLine());
        double x = Double.parseDouble(input.nextLine());
        double y = Double.parseDouble(input.nextLine());

        boolean inside = (x >= x1 && x <= x2) && (y >= y1 && y <= y2);

        if (inside){
            System.out.println("Inside");
        }else {
            System.out.println("Outside");
        }
    }
}
