import java.util.Scanner;

public class P08_TradeComissions {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        String town = input.nextLine().toLowerCase();
        double sale = Double.parseDouble(input.nextLine());
        double commission = -1;

        if ("sofia".equals(town)){
            if (sale >=0 && sale <= 500){
                commission = sale * 0.05;
            }else if (sale <= 1000){
                commission = sale * 0.07;
            }else if (sale <= 10000){
                commission = sale * 0.08;
            }else if (sale > 10000){
                commission = sale * 0.12;
            }
        }else if ("varna".equals(town)){
            if (sale >=0 && sale <= 500){
                commission = sale * 0.045;
            }else if (sale <= 1000){
                commission = sale * 0.075;
            }else if (sale <= 10000){
                commission = sale * 0.1;
            }else if (sale > 10000){
                commission = sale * 0.13;
            }
        }else if ("plovdiv".equals(town)){
            if (sale >=0 && sale <= 500){
                commission = sale * 0.055;
            }else if (sale <= 1000){
                commission = sale * 0.08;
            }else if (sale <= 10000){
                commission = sale * 0.12;
            }else if (sale > 10000){
                commission = sale * 0.145;
            }
        }


        if (commission >= 0){
            System.out.printf("%.2f", commission);
        }else {
            System.out.println("error");
        }


    }
}
