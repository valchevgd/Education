import java.util.Scanner;

public class P13_Mask {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        int n = Integer.parseInt(input.nextLine());

        int outsideSpace = n - 2;
        int insideSpace = 0;
        int spaces = (((2*n) + 2) - (n + 5)) / 2;
        int tickCounter = n * 2;
        int slashCounter = 1;

        for (int i = 0; i < n - 1 ; i++) {
            System.out.println(repeatStr(" ", outsideSpace) +  "/" + repeatStr(" ", insideSpace)
            + "|  |" + repeatStr(" ", insideSpace) + "\\");
            outsideSpace --;
            insideSpace ++;
        }

        System.out.println(repeatStr("-", (n * 2 ) + 2));

        System.out.println("|" + repeatStr(" ", spaces) + "_" + repeatStr(" ", n + 1)
                + "_" + repeatStr(" ", spaces) + "|");
        System.out.println("|" + repeatStr(" ", spaces) + "@" + repeatStr(" ", n + 1)
                + "@" + repeatStr(" ", spaces) + "|");

        for (int i = 0; i < n / 2; i++) {
            System.out.println("|" + repeatStr(" ", n * 2) + "|");
        }

        System.out.println("|" + repeatStr(" ", n - 1) + "OO" + repeatStr(" ", n - 1)
        + "|");
        System.out.println("|" + repeatStr(" ", n - 2) + "/  \\" + repeatStr(" ", n - 2)
        + "|");
        System.out.println("|" + repeatStr(" ", n - 2) + "||||" + repeatStr(" ", n - 2)
                + "|");

        for (int i = 0; i < n + 1; i++) {
            System.out.println(repeatStr("\\", slashCounter) + repeatStr("`", tickCounter)
                    + repeatStr("/", slashCounter));
            slashCounter ++;
            tickCounter -= 2;
        }


    }

    static String repeatStr (String strToRepeat, int count){
        String text = "";

        for (int i = 0; i < count; i++) {
            text += strToRepeat;
        }

        return text;
    }
}
