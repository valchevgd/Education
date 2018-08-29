import java.util.Scanner;

public class P14_Sword {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        int n = Integer.parseInt(input.nextLine());
        int firstCount = n - 2;
        int middleSpaces = 3;
        int alphaSpaces = n / 2;
        int alphaSymbol = ((n * 2 + 1) - (((n / 2 ) * 2) + 3)) / 2;
        int downRows = ((n + 2) / 2) - 1;
        int downRowsSymbol = (n + 3) / 2;

        System.out.println(repeatStr("#", n - 1)+ "/^\\" + repeatStr("#", n - 1));
        for (int i = 0; i < n / 2; i++) {
            System.out.println(repeatStr("#", firstCount) + "." + repeatStr(" ", middleSpaces)
            + "." + repeatStr("#", firstCount));
            firstCount --;
            middleSpaces +=2;
        }
        System.out.println(repeatStr("#", alphaSymbol) + "|" + repeatStr(" ", alphaSpaces) +
        "S" + repeatStr(" ", alphaSpaces) + "|" +repeatStr("#", alphaSymbol));
        System.out.println(repeatStr("#", alphaSymbol) + "|" + repeatStr(" ", alphaSpaces) +
                "O" + repeatStr(" ", alphaSpaces) + "|" + repeatStr("#", alphaSymbol));
        System.out.println(repeatStr("#", alphaSymbol) + "|" + repeatStr(" ", alphaSpaces) +
                "F" + repeatStr(" ", alphaSpaces) + "|" + repeatStr("#", alphaSymbol));
        System.out.println(repeatStr("#", alphaSymbol) + "|" + repeatStr(" ", alphaSpaces) +
                "T" + repeatStr(" ", alphaSpaces) + "|" +repeatStr("#", alphaSymbol));

        System.out.println(repeatStr("#", alphaSymbol) + "|" + repeatStr(" ", alphaSpaces) +
                " " + repeatStr(" ", alphaSpaces) + "|" +repeatStr("#", alphaSymbol));

        if (n > 5){
            for (int i = 0; i < n - 5; i++) {
                System.out.println(repeatStr("#", alphaSymbol) + "|" + repeatStr(" ", alphaSpaces) +
                        " " + repeatStr(" ", alphaSpaces) + "|" +repeatStr("#", alphaSymbol));
            }
        }


        System.out.println(repeatStr("#", alphaSymbol) + "|" + repeatStr(" ", alphaSpaces) +
                "U" + repeatStr(" ", alphaSpaces) + "|" +repeatStr("#", alphaSymbol));
        System.out.println(repeatStr("#", alphaSymbol) + "|" + repeatStr(" ", alphaSpaces) +
                "N" + repeatStr(" ", alphaSpaces) + "|" +repeatStr("#", alphaSymbol));
        System.out.println(repeatStr("#", alphaSymbol) + "|" + repeatStr(" ", alphaSpaces) +
                "I" + repeatStr(" ", alphaSpaces) + "|" +repeatStr("#", alphaSymbol));

        System.out.println("@" + repeatStr("=", n * 2 - 1) + "@");
        for (int i = 0; i < downRows; i++) {
            System.out.println(repeatStr("#", downRowsSymbol)+"|" +
                    repeatStr(" ", (n * 2 + 1) - (downRowsSymbol * 2 + 2))
                    + "|" + repeatStr("#", downRowsSymbol));
        }
        System.out.println(repeatStr("#", downRowsSymbol)+"\\" +
                repeatStr(".", (n * 2 + 1) - (downRowsSymbol * 2 + 2))
                + "/" + repeatStr("#", downRowsSymbol));

    }
    

    static String repeatStr (String strToRepeat, int count){
        String text = "";

        for (int i = 0; i < count; i++) {
            text += strToRepeat;
        }

        return text;
    }
}
