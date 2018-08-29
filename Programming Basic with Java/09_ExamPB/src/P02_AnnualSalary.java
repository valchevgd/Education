import java.util.Scanner;

public class P02_AnnualSalary {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        int experience = Integer.parseInt(input.nextLine());
        String technology = input.nextLine();
        double salary = 0;

        switch (technology){
            case "C# Developer":
                salary = 5400 * 12;
                break;
            case "Java Developer":
                salary = 5700 * 12;
                break;
            case "Front-End Web Developer":
                salary = 4100 * 12;
                break;
            case "UX / UI Designer":
                salary = 3100 * 12;
                break;
            case "Game Designer":
                salary = 3600 * 12;
                break;

        }

        if (experience <= 5){
            salary = salary - (salary * 0.658);
            System.out.printf("Total earned money: %.2f BGN", salary);
        }else {
            System.out.printf("Total earned money: %.2f BGN", salary);
        }


    }
}
