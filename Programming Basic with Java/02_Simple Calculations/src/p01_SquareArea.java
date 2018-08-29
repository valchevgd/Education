import java.util.Scanner;

public class p01_SquareArea {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);
        int a = Integer.parseInt(input.nextLine());
        int area = a * a;
        System.out.println(area);
    }
}
