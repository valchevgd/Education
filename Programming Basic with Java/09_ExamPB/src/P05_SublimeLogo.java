import java.util.Scanner;

public class P05_SublimeLogo {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        int n = Integer.parseInt(input.nextLine());

        int spaceCounter = n * 2 - 2;
        int starsCounter = 2;

        for (int i = 0; i < n; i++) {
            System.out.println(repeatStr(" ", spaceCounter) + repeatStr("*", starsCounter));
            spaceCounter -= 2;
            starsCounter += 2;
        }

        spaceCounter = 2;
        starsCounter = n * 2 - 2;

        for (int i = 0; i < 2; i++) {
            System.out.println(repeatStr("*", starsCounter) + repeatStr(" ", spaceCounter));
            spaceCounter += 2;
            starsCounter -= 2;
        }
        spaceCounter -= 2;
        starsCounter += 2;
        for (int i = 0; i < 2; i++) {
            spaceCounter -= 2;
            starsCounter += 2;
            System.out.println(repeatStr("*", starsCounter) + repeatStr(" ", spaceCounter));
        }

        for (int i = 0; i < 2; i++) {
            spaceCounter += 2;
            starsCounter -= 2;
            System.out.println(repeatStr(" ", spaceCounter) + repeatStr("*", starsCounter));

        }

        for (int i = 0; i < 2; i++) {
            spaceCounter -= 2;
            starsCounter += 2;
            System.out.println(repeatStr(" ", spaceCounter) + repeatStr("*", starsCounter));
        }

        for (int i = 0; i < n - 1; i++) {
            spaceCounter += 2;
            starsCounter -= 2;
            System.out.println(repeatStr("*", starsCounter) + repeatStr(" ", spaceCounter));
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
