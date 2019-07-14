import java.util.Scanner;

public class P06_ForeignLanguages {

    public static void main(String[] args) {

        Scanner scanner = new Scanner(System.in);

        String country = scanner.nextLine();
        String language = "unknown";

        switch (country) {

            case "England":
            case "USA":
                language = "English";
                break;
            case "Spain":
            case "Argentina":
            case "Mexico":
                language = "Spanish";
        }

        System.out.println(language);
    }
}
