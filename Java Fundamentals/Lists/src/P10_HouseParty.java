import java.util.ArrayList;
import java.util.List;
import java.util.Scanner;

public class P10_HouseParty {

    public static void main(String[] args) {

        Scanner scanner = new Scanner(System.in);

        int num = Integer.parseInt(scanner.nextLine());

        List<String> partyList = new ArrayList<>(num);

        for (int i = 0; i < num; i++) {

            String[] line = scanner.nextLine().split(" ");

            if (line.length == 3) {

                addPerson(line[0], partyList);
            } else {

                removePerson(line[0], partyList);
            }
        }

        for (String person : partyList) {

            System.out.println(person);
        }

    }

    private static void removePerson(String person, List<String> partyList) {

        if (!partyList.contains(person)){

            System.out.printf("%s is not in the list!%n", person);
            return;
        }

        partyList.remove(person);

    }

    private static void addPerson(String person, List<String> partyList) {

        if (partyList.contains(person)){

            System.out.printf("%s is already in the list!%n", person);
            return;
        }

        partyList.add(person);
    }
}
