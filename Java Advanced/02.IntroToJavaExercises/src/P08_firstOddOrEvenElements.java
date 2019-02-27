import java.util.ArrayList;
import java.util.Arrays;
import java.util.List;
import java.util.Scanner;

public class P08_firstOddOrEvenElements {

    public static void main(String[] args) {

        Scanner input = new Scanner(System.in);

        String[] elements = input.nextLine().split("\\s+");
        String[] commands = input.nextLine().split("\\s+");
        int elementsNeed = Integer.valueOf(commands[1]);
        String type = commands[2];

        StringBuilder output = new StringBuilder();
        int count = 0;

        for (int i = 0; i < elements.length; i++) {
            int num = Integer.valueOf(elements[i]);

            if ("odd".equals(type)){
                if (num % 2 != 0){
                    output.append(num).append(" ");
                    count++;
                    if (count == elementsNeed){
                        break;
                    }
                }
            }else if ("even".equals(type)){
                if (num % 2 == 0){
                    output.append(num).append(" ");
                    count++;
                    if (count == elementsNeed){
                        break;
                    }
                }
            }
        }

        System.out.println(output);
    }
}
