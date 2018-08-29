import java.util.Scanner;

public class P18_Logistics {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        int loads = Integer.parseInt(input.nextLine());
        double busLoad = 0;
        double truckLoad = 0;
        double trainLoad = 0;
        int tons = 0;

        for (int i = 0; i < loads; i++) {
            int nextTons = Integer.parseInt(input.nextLine());
            tons += nextTons;

            if (nextTons <= 3){
                busLoad += nextTons;
            }else if (nextTons <= 11){
                truckLoad += nextTons;
            }else {
                trainLoad += nextTons;
            }
        }

        double  busPrice = busLoad * 200;
        double  truckPrice = truckLoad * 175;
        double trainPrice = trainLoad * 120;
        double averagePrice = (busPrice + truckPrice + trainPrice) / tons * 1.0;

        System.out.printf("%.2f%n", averagePrice);
        System.out.printf("%.2f%%%n", busLoad / tons * 100.0);
        System.out.printf("%.2f%%%n", truckLoad / tons * 100.0);
        System.out.printf("%.2f%%%n", trainLoad / tons * 100.0);

    }
}
