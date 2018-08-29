import java.util.Scanner;

public class P05_IntegerToHexAndBinary {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        int n = Integer.parseInt(input.nextLine());


        System.out.println(Integer.toHexString(n).toUpperCase());
        System.out.println(Integer.toBinaryString(n));
    }
}
