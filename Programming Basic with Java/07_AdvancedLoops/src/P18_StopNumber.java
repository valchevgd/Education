import java.util.Scanner;

public class P18_StopNumber {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        int lastNumber = Integer.parseInt(input.nextLine());
        int startNumber = Integer.parseInt(input.nextLine());
        int stopNumber = Integer.parseInt(input.nextLine());

        while (startNumber >= lastNumber){
            if (startNumber % 2 == 0){
                if (startNumber % 3 == 0){
                    if (startNumber == stopNumber){
                        break;
                    }else {
                        System.out.print(startNumber + " ");
                    }
                }
            }
            startNumber --;
        }
    }
}
