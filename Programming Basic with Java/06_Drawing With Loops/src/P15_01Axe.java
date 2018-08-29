import java.util.Scanner;

public class P15_01Axe {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        int n = Integer.parseInt(input.nextLine());

        int firstDashesCounter = n * 3;
        int middleCounter = 0;
        int backCounter = n * 2 - 2;


        for (int i = 0; i < n; i++) {
            System.out.println(repeatStr("-", n * 3) + "*" + repeatStr("-", middleCounter)
            + "*" + repeatStr("-", backCounter));

            middleCounter ++;
            backCounter --;
        }
        middleCounter --;
        backCounter ++;
        for (int i = 0; i < n / 2; i++) {
            System.out.println(repeatStr("*", firstDashesCounter + 1) + repeatStr("-", middleCounter)
            + "*" + repeatStr("-", backCounter));
        }

        for (int i = 0; i < n / 2 - 1; i++) {
            System.out.println(repeatStr("-", firstDashesCounter) + "*" + repeatStr("-", middleCounter)
            + "*" + repeatStr("-", backCounter));

            firstDashesCounter --;
            middleCounter += 2;
            backCounter --;
        }

        System.out.println(repeatStr("-", firstDashesCounter) + repeatStr("*", middleCounter + 2)
        + repeatStr("-", backCounter));
    }

    static String repeatStr (String strToRepeat, int count){
        String text = "";

        for (int i = 0; i < count; i++) {
            text += strToRepeat;
        }

        return text;
    }
}
