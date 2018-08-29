import java.util.Scanner;

public class P13_Birthday {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);
        double length = Double.parseDouble(input.nextLine());
        double width = Double.parseDouble(input.nextLine());
        double height = Double.parseDouble(input.nextLine());
        double percent = Double.parseDouble(input.nextLine());
        double capacity = (length * width * height) * 0.001;
        double percentTwo = percent * 0.01;
        double water = capacity * (1 - percentTwo);
        System.out.printf("%.3f", water);
    }
}
