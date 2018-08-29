import java.util.Scanner;

public class P17_Hospital {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        int period = Integer.parseInt(input.nextLine());
        int doctors = 7;
        int treatedPatients = 0;
        int unTreatedPatients = 0;

        for (int day = 1; day <= period ; day++) {
            int patients = Integer.parseInt(input.nextLine());

            if (day % 3 == 0 && unTreatedPatients > treatedPatients){
                doctors ++;
            }

            if (patients > doctors){
                treatedPatients += doctors;
                unTreatedPatients += patients - doctors;
            }else {
                treatedPatients += patients;
            }
        }

        System.out.printf("Treated patients: %d.%n", treatedPatients);
        System.out.printf("Untreated patients: %d.", unTreatedPatients);
    }
}
