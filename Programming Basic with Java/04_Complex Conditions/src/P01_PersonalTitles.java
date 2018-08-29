import java.util.Scanner;

public class P01_PersonalTitles {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        double age = Double.parseDouble(input.nextLine());
        String gender = input.nextLine();

        if (age < 16){
            if ("m".equals(gender)){
                System.out.println("Master");
            }else {
                System.out.println("Miss");
            }
        }else {
            if ("m".equals(gender)){
                System.out.println("Mr.");
            }else {
                System.out.println("Ms.");
            }
        }
    }
}
